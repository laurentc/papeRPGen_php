<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aventure
 *
 * @ORM\Table(name="aventure")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AventureRepository")
 */
class Aventure
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
     * @ORM\Column(name="avt_label", type="string", length=255)
     */
    private $avtLabel;


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
     * Set avtId
     *
     * @param integer $avtId
     *
     * @return Aventure
     */
    public function setAvtId($avtId)
    {
        $this->avtId = $avtId;

        return $this;
    }

    /**
     * Get avtId
     *
     * @return int
     */
    public function getAvtId()
    {
        return $this->avtId;
    }

    /**
     * Set avtLabel
     *
     * @param string $avtLabel
     *
     * @return Aventure
     */
    public function setAvtLabel($avtLabel)
    {
        $this->avtLabel = $avtLabel;

        return $this;
    }

    /**
     * Get avtLabel
     *
     * @return string
     */
    public function getAvtLabel()
    {
        return $this->avtLabel;
    }
}

