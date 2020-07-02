<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\FicheTechnique
 */
class FicheTechnique
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $Code_TF
     */
    private $Code_TF;

    /**
     * @var string $Adresse_admin
     */
    private $Adresse_admin;

    /**
     * @var string $Adresse_tech
     */
    private $Adresse_tech;

    /**
     * @var string $Longitude
     */
    private $Longitude;

    /**
     * @var string $Latitude
     */
    private $Latitude;

    /**
     * @var string $CodeImmeuble
     */
    private $CodeImmeuble;

    /**
     * @var string $Nordre
     */
    private $Nordre;

    /**
     * @var string $Categorie
     */
    private $Categorie;

    /**
     * @var string $Plan
     */
    private $Plan;

    /**
     * @var integer $NumImmeuble
     */
    private $NumImmeuble;

    /**
     * @var integer $NumLocal
     */
    private $NumLocal;

    /**
     * @var integer $NumEtage
     */
    private $NumEtage;

    /**
     * @var string $CodeMunicipal
     */
    private $CodeMunicipal;

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
     * Set Code_TF
     *
     * @param string $codeTF
     * @return FicheTechnique
     */
    public function setCodeTF($codeTF)
    {
        $this->Code_TF = $codeTF;
        return $this;
    }

    /**
     * Get Code_TF
     *
     * @return string 
     */
    public function getCodeTF()
    {
        return $this->Code_TF;
    }

    /**
     * Set Adresse_admin
     *
     * @param string $adresseAdmin
     * @return FicheTechnique
     */
    public function setAdresseAdmin($adresseAdmin)
    {
        $this->Adresse_admin = $adresseAdmin;
        return $this;
    }

    /**
     * Get Adresse_admin
     *
     * @return string 
     */
    public function getAdresseAdmin()
    {
        return $this->Adresse_admin;
    }

    /**
     * Set Adresse_tech
     *
     * @param string $adresseTech
     * @return FicheTechnique
     */
    public function setAdresseTech($adresseTech)
    {
        $this->Adresse_tech = $adresseTech;
        return $this;
    }

    /**
     * Get Adresse_tech
     *
     * @return string 
     */
    public function getAdresseTech()
    {
        return $this->Adresse_tech;
    }

    /**
     * Set Longitude
     *
     * @param string $longitude
     * @return FicheTechnique
     */
    public function setLongitude($longitude)
    {
        $this->Longitude = $longitude;
        return $this;
    }

    /**
     * Get Longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * Set Latitude
     *
     * @param string $latitude
     * @return FicheTechnique
     */
    public function setLatitude($latitude)
    {
        $this->Latitude = $latitude;
        return $this;
    }

    /**
     * Get Latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * Set CodeImmeuble
     *
     * @param string $codeImmeuble
     * @return FicheTechnique
     */
    public function setCodeImmeuble($codeImmeuble)
    {
        $this->CodeImmeuble = $codeImmeuble;
        return $this;
    }

    /**
     * Get CodeImmeuble
     *
     * @return string 
     */
    public function getCodeImmeuble()
    {
        return $this->CodeImmeuble;
    }

    /**
     * Set Nordre
     *
     * @param string $nordre
     * @return FicheTechnique
     */
    public function setNordre($nordre)
    {
        $this->Nordre = $nordre;
        return $this;
    }

    /**
     * Get Nordre
     *
     * @return string 
     */
    public function getNordre()
    {
        return $this->Nordre;
    }

    /**
     * Set Categorie
     *
     * @param string $categorie
     * @return FicheTechnique
     */
    public function setCategorie($categorie)
    {
        $this->Categorie = $categorie;
        return $this;
    }

    /**
     * Get Categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->Categorie;
    }

    /**
     * Set Plan
     *
     * @param string $plan
     * @return FicheTechnique
     */
    public function setPlan($plan)
    {
        $this->Plan = $plan;
        return $this;
    }

    /**
     * Get Plan
     *
     * @return string 
     */
    public function getPlan()
    {
        return $this->Plan;
    }

    /**
     * Set NumImmeuble
     *
     * @param integer $numImmeuble
     * @return FicheTechnique
     */
    public function setNumImmeuble($numImmeuble)
    {
        $this->NumImmeuble = $numImmeuble;
        return $this;
    }

    /**
     * Get NumImmeuble
     *
     * @return integer 
     */
    public function getNumImmeuble()
    {
        return $this->NumImmeuble;
    }

    /**
     * Set NumLocal
     *
     * @param integer $numLocal
     * @return FicheTechnique
     */
    public function setNumLocal($numLocal)
    {
        $this->NumLocal = $numLocal;
        return $this;
    }

    /**
     * Get NumLocal
     *
     * @return integer 
     */
    public function getNumLocal()
    {
        return $this->NumLocal;
    }

    /**
     * Set NumEtage
     *
     * @param integer $numEtage
     * @return FicheTechnique
     */
    public function setNumEtage($numEtage)
    {
        $this->NumEtage = $numEtage;
        return $this;
    }

    /**
     * Get NumEtage
     *
     * @return integer 
     */
    public function getNumEtage()
    {
        return $this->NumEtage;
    }

    /**
     * Set CodeMunicipal
     *
     * @param string $codeMunicipal
     * @return FicheTechnique
     */
    public function setCodeMunicipal($codeMunicipal)
    {
        $this->CodeMunicipal = $codeMunicipal;
        return $this;
    }

    /**
     * Get CodeMunicipal
     *
     * @return string 
     */
    public function getCodeMunicipal()
    {
        return $this->CodeMunicipal;
    }

    /**
     * Set Etat
     *
     * @param integer $etat
     * @return FicheTechnique
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
     * @return FicheTechnique
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
    /**
     * @var string $Adresse
     */
    private $Adresse;

    /**
     * @var string $GPS
     */
    private $GPS;


    /**
     * Set Adresse
     *
     * @param string $adresse
     * @return FicheTechnique
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
     * Set GPS
     *
     * @param string $gPS
     * @return FicheTechnique
     */
    public function setGPS($gPS)
    {
        $this->GPS = $gPS;
        return $this;
    }

    /**
     * Get GPS
     *
     * @return string 
     */
    public function getGPS()
    {
        return $this->GPS;
    }
    /**
     * @var string $GPSss
     */
    private $GPSss;


    /**
     * Set GPSss
     *
     * @param string $gPSss
     * @return FicheTechnique
     */
    public function setGPSss($gPSss)
    {
        $this->GPSss = $gPSss;
        return $this;
    }

    /**
     * Get GPSss
     *
     * @return string 
     */
    public function getGPSss()
    {
        return $this->GPSss;
    }
}