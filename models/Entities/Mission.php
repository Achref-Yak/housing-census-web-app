<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Mission
 */
class Mission
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $Adresse
     */
    private $Adresse;

    /**
     * @var integer $Etat
     */
    private $Etat;

    /**
     * @var Entities\Immeuble
     */
    private $Immeuble;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Adresse
     *
     * @param string $adresse
     * @return Mission
     */
    public function setAdresse($adresse)
    {
        $this->Adresse = $adresse;
        return $this;
    }

    /**
     * Get Adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * Set Etat
     *
     * @param integer $etat
     * @return Mission
     */
    public function setEtat($etat)
    {
        $this->Etat = $etat;
        return $this;
    }

    /**
     * Get Etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->Etat;
    }

    /**
     * Set Immeuble
     *
     * @param Entities\Immeuble $immeuble
     * @return Mission
     */
    public function setImmeuble(\Entities\Immeuble $immeuble = null)
    {
        $this->Immeuble = $immeuble;
        return $this;
    }

    /**
     * Get Immeuble
     *
     * @return Entities\Immeuble 
     */
    public function getImmeuble()
    {
        return $this->Immeuble;
    }
}