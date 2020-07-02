<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Menu_haut extends \Entities\Menu_haut implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setLibelle($libelle)
    {
        $this->__load();
        return parent::setLibelle($libelle);
    }

    public function getLibelle()
    {
        $this->__load();
        return parent::getLibelle();
    }

    public function setEtat($etat)
    {
        $this->__load();
        return parent::setEtat($etat);
    }

    public function getEtat()
    {
        $this->__load();
        return parent::getEtat();
    }

    public function setOrdre($ordre)
    {
        $this->__load();
        return parent::setOrdre($ordre);
    }

    public function getOrdre()
    {
        $this->__load();
        return parent::getOrdre();
    }

    public function setInfo($info)
    {
        $this->__load();
        return parent::setInfo($info);
    }

    public function getInfo()
    {
        $this->__load();
        return parent::getInfo();
    }

    public function setLien($lien)
    {
        $this->__load();
        return parent::setLien($lien);
    }

    public function getLien()
    {
        $this->__load();
        return parent::getLien();
    }

    public function setCreatedDate($createdDate)
    {
        $this->__load();
        return parent::setCreatedDate($createdDate);
    }

    public function getCreatedDate()
    {
        $this->__load();
        return parent::getCreatedDate();
    }

    public function setCreatedBy($createdBy)
    {
        $this->__load();
        return parent::setCreatedBy($createdBy);
    }

    public function getCreatedBy()
    {
        $this->__load();
        return parent::getCreatedBy();
    }

    public function setUpdateDate($updateDate)
    {
        $this->__load();
        return parent::setUpdateDate($updateDate);
    }

    public function getUpdateDate()
    {
        $this->__load();
        return parent::getUpdateDate();
    }

    public function setUpdatedBy($updatedBy)
    {
        $this->__load();
        return parent::setUpdatedBy($updatedBy);
    }

    public function getUpdatedBy()
    {
        $this->__load();
        return parent::getUpdatedBy();
    }

    public function setSousMenu(\Entities\Menu_sous_menu $sousMenu = NULL)
    {
        $this->__load();
        return parent::setSousMenu($sousMenu);
    }

    public function getSousMenu()
    {
        $this->__load();
        return parent::getSousMenu();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'libelle', 'etat', 'ordre', 'info', 'lien', 'created_date', 'created_by', 'update_date', 'updated_by', 'sous_menu');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}