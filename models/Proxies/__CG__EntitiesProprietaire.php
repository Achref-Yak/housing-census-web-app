<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Proprietaire extends \Entities\Proprietaire implements \Doctrine\ORM\Proxy\Proxy
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

    public function setIdentite($identite)
    {
        $this->__load();
        return parent::setIdentite($identite);
    }

    public function getIdentite()
    {
        $this->__load();
        return parent::getIdentite();
    }

    public function setNationalite($nationalite)
    {
        $this->__load();
        return parent::setNationalite($nationalite);
    }

    public function getNationalite()
    {
        $this->__load();
        return parent::getNationalite();
    }

    public function setQuotPar($quotPar)
    {
        $this->__load();
        return parent::setQuotPar($quotPar);
    }

    public function getQuotPar()
    {
        $this->__load();
        return parent::getQuotPar();
    }

    public function setDateTrans($dateTrans)
    {
        $this->__load();
        return parent::setDateTrans($dateTrans);
    }

    public function getDateTrans()
    {
        $this->__load();
        return parent::getDateTrans();
    }

    public function setDateCons($dateCons)
    {
        $this->__load();
        return parent::setDateCons($dateCons);
    }

    public function getDateCons()
    {
        $this->__load();
        return parent::getDateCons();
    }

    public function setDateAq($dateAq)
    {
        $this->__load();
        return parent::setDateAq($dateAq);
    }

    public function getDateAq()
    {
        $this->__load();
        return parent::getDateAq();
    }

    public function setDecisionGestion($decisionGestion)
    {
        $this->__load();
        return parent::setDecisionGestion($decisionGestion);
    }

    public function getDecisionGestion()
    {
        $this->__load();
        return parent::getDecisionGestion();
    }

    public function setImmeuble(\Entities\Immeuble $immeuble = NULL)
    {
        $this->__load();
        return parent::setImmeuble($immeuble);
    }

    public function getImmeuble()
    {
        $this->__load();
        return parent::getImmeuble();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'Identite', 'Nationalite', 'QuotPar', 'DateTrans', 'DateCons', 'DateAq', 'DecisionGestion', 'Immeuble');
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