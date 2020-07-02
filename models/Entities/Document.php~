<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Document
 */
class Document
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $URL
     */
    private $URL;

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
     * Set URL
     *
     * @param string $uRL
     * @return Document
     */
    public function setURL($uRL)
    {
        $this->URL = $uRL;
        return $this;
    }

    /**
     * Get URL
     *
     * @return string 
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * Set Immeuble
     *
     * @param Entities\Immeuble $immeuble
     * @return Document
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