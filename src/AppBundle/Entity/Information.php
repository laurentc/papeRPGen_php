<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Information
 *
 * @ORM\Table(name="information")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InformationRepository")
 */
class Information
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="info_key", type="string", length=255)
     */
    private $infoKey;

    /**
     * @var string
     *
     * @ORM\Column(name="info_value", type="string", length=255)
     */
    private $infoValue;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set infoId
     *
     * @param integer $infoId
     *
     * @return Information
     */
    public function setInfoId($infoId)
    {
        $this->infoId = $infoId;

        return $this;
    }

    /**
     * Get infoId
     *
     * @return int
     */
    public function getInfoId()
    {
        return $this->infoId;
    }

    /**
     * Set infoKey
     *
     * @param string $infoKey
     *
     * @return Information
     */
    public function setInfoKey($infoKey)
    {
        $this->infoKey = $infoKey;

        return $this;
    }

    /**
     * Get infoKey
     *
     * @return string
     */
    public function getInfoKey()
    {
        return $this->infoKey;
    }

    /**
     * Set infoValue
     *
     * @param string $infoValue
     *
     * @return Information
     */
    public function setInfoValue($infoValue)
    {
        $this->infoValue = $infoValue;

        return $this;
    }

    /**
     * Get infoValue
     *
     * @return string
     */
    public function getInfoValue()
    {
        return $this->infoValue;
    }
}

