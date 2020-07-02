<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Local
 */
class Local
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $Code_Local
     */
    private $Code_Local;

    /**
     * @var string $Etage
     */
    private $Etage;

    /**
     * @var string $Surface
     */
    private $Surface;

    /**
     * @var integer $Nlocal
     */
    private $Nlocal;

    /**
     * @var string $Nomlocataire
     */
    private $Nomlocataire;

    /**
     * @var integer $NonBatis
     */
    private $NonBatis;

    /**
     * @var integer $Batis
     */
    private $Batis;

    /**
     * @var integer $Usage
     */
    private $Usage;

    /**
     * @var string $NatureLocataire
     */
    private $NatureLocataire;

    /**
     * @var integer $ValeurLocation
     */
    private $ValeurLocation;

    /**
     * @var integer $NomFamilleOccupant
     */
    private $NomFamilleOccupant;

    /**
     * @var integer $CuisineInde
     */
    private $CuisineInde;

    /**
     * @var integer $SalleEau
     */
    private $SalleEau;

    /**
     * @var integer $Accessibilite
     */
    private $Accessibilite;

    /**
     * @var integer $EclairageN
     */
    private $EclairageN;

    /**
     * @var integer $SurfaceHabituelleNC
     */
    private $SurfaceHabituelleNC;

    /**
     * @var integer $MoyenChauffage
     */
    private $MoyenChauffage;

    /**
     * @var integer $Ventillation
     */
    private $Ventillation;

    /**
     * @var integer $Humidite
     */
    private $Humidite;

    /**
     * @var integer $DistEau
     */
    private $DistEau;

    /**
     * @var integer $EvacC
     */
    private $EvacC;

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
     * Set Code_Local
     *
     * @param string $codeLocal
     * @return Local
     */
    public function setCodeLocal($codeLocal)
    {
        $this->Code_Local = $codeLocal;
        return $this;
    }

    /**
     * Get Code_Local
     *
     * @return string 
     */
    public function getCodeLocal()
    {
        return $this->Code_Local;
    }

    /**
     * Set Etage
     *
     * @param string $etage
     * @return Local
     */
    public function setEtage($etage)
    {
        $this->Etage = $etage;
        return $this;
    }

    /**
     * Get Etage
     *
     * @return string 
     */
    public function getEtage()
    {
        return $this->Etage;
    }

    /**
     * Set Surface
     *
     * @param string $surface
     * @return Local
     */
    public function setSurface($surface)
    {
        $this->Surface = $surface;
        return $this;
    }

    /**
     * Get Surface
     *
     * @return string 
     */
    public function getSurface()
    {
        return $this->Surface;
    }

    /**
     * Set Nlocal
     *
     * @param integer $nlocal
     * @return Local
     */
    public function setNlocal($nlocal)
    {
        $this->Nlocal = $nlocal;
        return $this;
    }

    /**
     * Get Nlocal
     *
     * @return integer 
     */
    public function getNlocal()
    {
        return $this->Nlocal;
    }

    /**
     * Set Nomlocataire
     *
     * @param string $nomlocataire
     * @return Local
     */
    public function setNomlocataire($nomlocataire)
    {
        $this->Nomlocataire = $nomlocataire;
        return $this;
    }

    /**
     * Get Nomlocataire
     *
     * @return string 
     */
    public function getNomlocataire()
    {
        return $this->Nomlocataire;
    }

    /**
     * Set NonBatis
     *
     * @param integer $nonBatis
     * @return Local
     */
    public function setNonBatis($nonBatis)
    {
        $this->NonBatis = $nonBatis;
        return $this;
    }

    /**
     * Get NonBatis
     *
     * @return integer 
     */
    public function getNonBatis()
    {
        return $this->NonBatis;
    }

    /**
     * Set Batis
     *
     * @param integer $batis
     * @return Local
     */
    public function setBatis($batis)
    {
        $this->Batis = $batis;
        return $this;
    }

    /**
     * Get Batis
     *
     * @return integer 
     */
    public function getBatis()
    {
        return $this->Batis;
    }

    /**
     * Set Usage
     *
     * @param integer $usage
     * @return Local
     */
    public function setUsage($usage)
    {
        $this->Usage = $usage;
        return $this;
    }

    /**
     * Get Usage
     *
     * @return integer 
     */
    public function getUsage()
    {
        return $this->Usage;
    }

    /**
     * Set NatureLocataire
     *
     * @param string $natureLocataire
     * @return Local
     */
    public function setNatureLocataire($natureLocataire)
    {
        $this->NatureLocataire = $natureLocataire;
        return $this;
    }

    /**
     * Get NatureLocataire
     *
     * @return string 
     */
    public function getNatureLocataire()
    {
        return $this->NatureLocataire;
    }

    /**
     * Set ValeurLocation
     *
     * @param integer $valeurLocation
     * @return Local
     */
    public function setValeurLocation($valeurLocation)
    {
        $this->ValeurLocation = $valeurLocation;
        return $this;
    }

    /**
     * Get ValeurLocation
     *
     * @return integer 
     */
    public function getValeurLocation()
    {
        return $this->ValeurLocation;
    }

    /**
     * Set NomFamilleOccupant
     *
     * @param integer $nomFamilleOccupant
     * @return Local
     */
    public function setNomFamilleOccupant($nomFamilleOccupant)
    {
        $this->NomFamilleOccupant = $nomFamilleOccupant;
        return $this;
    }

    /**
     * Get NomFamilleOccupant
     *
     * @return integer 
     */
    public function getNomFamilleOccupant()
    {
        return $this->NomFamilleOccupant;
    }

    /**
     * Set CuisineInde
     *
     * @param integer $cuisineInde
     * @return Local
     */
    public function setCuisineInde($cuisineInde)
    {
        $this->CuisineInde = $cuisineInde;
        return $this;
    }

    /**
     * Get CuisineInde
     *
     * @return integer 
     */
    public function getCuisineInde()
    {
        return $this->CuisineInde;
    }

    /**
     * Set SalleEau
     *
     * @param integer $salleEau
     * @return Local
     */
    public function setSalleEau($salleEau)
    {
        $this->SalleEau = $salleEau;
        return $this;
    }

    /**
     * Get SalleEau
     *
     * @return integer 
     */
    public function getSalleEau()
    {
        return $this->SalleEau;
    }

    /**
     * Set Accessibilite
     *
     * @param integer $accessibilite
     * @return Local
     */
    public function setAccessibilite($accessibilite)
    {
        $this->Accessibilite = $accessibilite;
        return $this;
    }

    /**
     * Get Accessibilite
     *
     * @return integer 
     */
    public function getAccessibilite()
    {
        return $this->Accessibilite;
    }

    /**
     * Set EclairageN
     *
     * @param integer $eclairageN
     * @return Local
     */
    public function setEclairageN($eclairageN)
    {
        $this->EclairageN = $eclairageN;
        return $this;
    }

    /**
     * Get EclairageN
     *
     * @return integer 
     */
    public function getEclairageN()
    {
        return $this->EclairageN;
    }

    /**
     * Set SurfaceHabituelleNC
     *
     * @param integer $surfaceHabituelleNC
     * @return Local
     */
    public function setSurfaceHabituelleNC($surfaceHabituelleNC)
    {
        $this->SurfaceHabituelleNC = $surfaceHabituelleNC;
        return $this;
    }

    /**
     * Get SurfaceHabituelleNC
     *
     * @return integer 
     */
    public function getSurfaceHabituelleNC()
    {
        return $this->SurfaceHabituelleNC;
    }

    /**
     * Set MoyenChauffage
     *
     * @param integer $moyenChauffage
     * @return Local
     */
    public function setMoyenChauffage($moyenChauffage)
    {
        $this->MoyenChauffage = $moyenChauffage;
        return $this;
    }

    /**
     * Get MoyenChauffage
     *
     * @return integer 
     */
    public function getMoyenChauffage()
    {
        return $this->MoyenChauffage;
    }

    /**
     * Set Ventillation
     *
     * @param integer $ventillation
     * @return Local
     */
    public function setVentillation($ventillation)
    {
        $this->Ventillation = $ventillation;
        return $this;
    }

    /**
     * Get Ventillation
     *
     * @return integer 
     */
    public function getVentillation()
    {
        return $this->Ventillation;
    }

    /**
     * Set Humidite
     *
     * @param integer $humidite
     * @return Local
     */
    public function setHumidite($humidite)
    {
        $this->Humidite = $humidite;
        return $this;
    }

    /**
     * Get Humidite
     *
     * @return integer 
     */
    public function getHumidite()
    {
        return $this->Humidite;
    }

    /**
     * Set DistEau
     *
     * @param integer $distEau
     * @return Local
     */
    public function setDistEau($distEau)
    {
        $this->DistEau = $distEau;
        return $this;
    }

    /**
     * Get DistEau
     *
     * @return integer 
     */
    public function getDistEau()
    {
        return $this->DistEau;
    }

    /**
     * Set EvacC
     *
     * @param integer $evacC
     * @return Local
     */
    public function setEvacC($evacC)
    {
        $this->EvacC = $evacC;
        return $this;
    }

    /**
     * Get EvacC
     *
     * @return integer 
     */
    public function getEvacC()
    {
        return $this->EvacC;
    }

    /**
     * Set Immeuble
     *
     * @param Entities\Immeuble $immeuble
     * @return Local
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
     * @var integer $Usag
     */
    private $Usag;


    /**
     * Set Usag
     *
     * @param integer $usag
     * @return Local
     */
    public function setUsag($usag)
    {
        $this->Usag = $usag;
        return $this;
    }

    /**
     * Get Usag
     *
     * @return integer 
     */
    public function getUsag()
    {
        return $this->Usag;
    }
}