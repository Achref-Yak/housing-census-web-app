<?php



class Doctrine
{
    // the Doctrine entity manager
    public $em = null;

    public function __construct()
    {
        // include our CodeIgniter application's database configuration
        require_once APPPATH.'config/database.php';
        
        // include Doctrine's fancy ClassLoader class
        require_once APPPATH.'libraries/Doctrine/Common/ClassLoader.php';

        // load the Doctrine classes
        $doctrineClassLoader = new \Doctrine\Common\ClassLoader('Doctrine', APPPATH.'libraries');
        $doctrineClassLoader->register();
        
        // load Symfony2 helpers
        // Don't be alarmed, this is necessary for YAML mapping files
        $symfonyClassLoader = new \Doctrine\Common\ClassLoader('Symfony', APPPATH.'libraries/Doctrine');
        $symfonyClassLoader->register();

        // load the entities
        $entityClassLoader = new \Doctrine\Common\ClassLoader('Entities', APPPATH.'models');
        $entityClassLoader->register();
        // load the repositories
        $entityClassLoader = new \Doctrine\Common\ClassLoader('Repositories', APPPATH.'models');
        $entityClassLoader->register();
        // load the proxy entities
        $proxyClassLoader = new \Doctrine\Common\ClassLoader('Proxies', APPPATH.'models');
        $proxyClassLoader->register();

        // set up the configuration 
        $config = new \Doctrine\ORM\Configuration;
   /// echo ENVIRONMENT;
        if(ENVIRONMENT == 'development')
            // set up simple array caching for development mode
            $cache = new \Doctrine\Common\Cache\ArrayCache;
        else
            // set up caching with APC for production mode
            $cache = new \Doctrine\Common\Cache\ArrayCache;
		
         // Set up logger
/*        require_once APPPATH.'libraries/FileSqlLogger.php';
        $logger = new FileSqlLogger;
        $config->setSQLLogger($logger);*/
 	
			//var_dump($cache) ;
        $config->setMetadataCacheImpl($cache);
        $config->setQueryCacheImpl($cache);

        // set up proxy configuration
        $config->setProxyDir(APPPATH.'models/Proxies');
        $config->setProxyNamespace('Proxies');
        
        // auto-generate proxy classes if we are in development mode
        $config->setAutoGenerateProxyClasses(ENVIRONMENT == 'development');

        // set up annotation driver
        $yamlDriver = new \Doctrine\ORM\Mapping\Driver\YamlDriver(APPPATH.'models/Mappings');
        $config->setMetadataDriverImpl($yamlDriver);

        // Database connection information
        $connectionOptions = array(
            'driver' => 'pdo_mysql',
            'user' => $db['default']['username'],
            'password' => $db['default']['password'],
            'host' => $db['default']['hostname'],
            'dbname' => $db['default']['database']
        );
        
        // $entityManager is an instance of EntityManager
// Add UTF8 handler to EntityManager

        // create the EntityManager
        $em = \Doctrine\ORM\EntityManager::create($connectionOptions, $config);
        $em->getEventManager()->addEventSubscriber(
                new \Doctrine\DBAL\Event\Listeners\MysqlSessionInit('utf8', 'utf8_unicode_ci')
);

        // custom datatypes (not mapped for reverse engineering)
//$em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('set', 'string');
//$em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
        
        // store it as a member, for use in our CodeIgniter controllers.
        $this->em = $em;
    }
	
	/**
   * generate entity objects automatically from mysql db tables
   * @return none
   */
  function generate_classes(){     
       
    $this->em->getConfiguration()
             ->setMetadataDriverImpl(
                new DatabaseDriver(
                        $this->em->getConnection()->getSchemaManager()
                )
    );
 
    $cmf = new DisconnectedClassMetadataFactory();
    $cmf->setEntityManager($this->em);
    $metadata = $cmf->getAllMetadata();     
    $generator = new EntityGenerator();
     
    $generator->setUpdateEntityIfExists(true);
    $generator->setGenerateStubMethods(true);
    $generator->setGenerateAnnotations(true);
    $generator->generate($metadata, APPPATH."models/Entities");
     
  }
}
 