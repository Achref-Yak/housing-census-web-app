<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Proprietaire
 */
class Proprietaire
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $Identite
     */
    private $Identite;

    /**
     * @var string $Nationalite
     */
    private $Nationalite;

    /**
     * @var string $QuotPar
     */
    private $QuotPar;

    /**
     * @var string $DateTrans
     */
    private $DateTrans;

    /**
     * @var string $DateCons
     */
    private $DateCons;

    /**
     * @var string $DateAq
     */
    private $DateAq;

    /**
     * @var string $DecisionGestion
     */
    private $DecisionGestion;

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
     * Set Identite
     *
     * @param string $identite
     * @return Proprietaire
     */
    public function setIdentite($identite)
    {
        $this->Identite = $identite;
        return $this;
    }

    /**
     * Get Identite
     *
     * @return string 
     */
    public function getIdentite()
    {
        return $this->Identite;
    }

    /**
     * Set Nationalite
     *
     * @param string $nationalite
     * @return Proprietaire
     */
    public function setNationalite($nationalite)
    {
        $this->Nationalite = $nationalite;
        return $this;
    }

    /**
     * Get Nationalite
     *
     * @return string 
     */
    public function getNationalite()
    {
        return $this->Nationalite;
    }

    /**
     * Set QuotPar
     *
     * @param string $quotPar
     * @return Proprietaire
     */
    public function setQuotPar($quotPar)
    {
        $this->QuotPar = $quotPar;
        return $this;
    }

    /**
     * Get QuotPar
     *
     * @return string 
     */
    public function getQuotPar()
    {
        return $this->QuotPar;
    }

    /**
     * Set DateTrans
     *
     * @param string $dateTrans
     * @return Proprietaire
     */
    public function setDateTrans($dateTrans)
    {
        $this->DateTrans = $dateTrans;
        return $this;
    }

    /**
     * Get DateTrans
     *
     * @return string 
     */
    public function getDateTrans()
    {
        return $this->DateTrans;
    }

    /**
     * Set DateCons
     *
     * @param string $dateCons
     * @return Proprietaire
     */
    public function setDateCons($dateCons)
    {
        $this->DateCons = $dateCons;
        return $this;
    }

    /**
     * Get DateCons
     *
     * @return string 
     */
    public function getDateCons()
    {
        return $this->DateCons;
    }

    /**
     * Set DateAq
     *
     * @param string $dateAq
     * @return Proprietaire
     */
    public function setDateAq($dateAq)
    {
        $this->DateAq = $dateAq;
        return $this;
    }

    /**
     * Get DateAq
     *
     * @return string 
     */
    public function getDateAq()
    {
        return $this->DateAq;
    }

    /**
     * Set DecisionGestion
     *
     * @param string $decisionGestion
     * @return Proprietaire
     */
    public function setDecisionGestion($decisionGestion)
    {
        $this->DecisionGestion = $decisionGestion;
        return $this;
    }

    /**
     * Get DecisionGestion
     *
     * @return string 
     */
    public function getDecisionGestion()
    {
        return $this->DecisionGestion;
    }

    /**
     * Set Immeuble
     *
     * @param Entities\Immeuble $immeuble
     * @return Proprietaire
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