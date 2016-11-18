<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enemy
 *
 * @ORM\Table(name="enemy")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EnemyRepository")
 */
class Enemy
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
     * @ORM\Column(name="ene_code", type="string", length=255)
     */
    private $eneCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ene_name", type="string", length=255)
     */
    private $eneName;

    /**
     * @var int
     *
     * @ORM\Column(name="ene_stamina", type="integer")
     */
    private $eneStamina;

    /**
     * @var int
     *
     * @ORM\Column(name="ene_fitness", type="integer")
     */
    private $eneFitness;


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
     * Set eneId
     *
     * @param integer $eneId
     *
     * @return Enemy
     */
    public function setEneId($eneId)
    {
        $this->eneId = $eneId;

        return $this;
    }

    /**
     * Get eneId
     *
     * @return int
     */
    public function getEneId()
    {
        return $this->eneId;
    }

    /**
     * Set eneCode
     *
     * @param string $eneCode
     *
     * @return Enemy
     */
    public function setEneCode($eneCode)
    {
        $this->eneCode = $eneCode;

        return $this;
    }

    /**
     * Get eneCode
     *
     * @return string
     */
    public function getEneCode()
    {
        return $this->eneCode;
    }

    /**
     * Set eneName
     *
     * @param string $eneName
     *
     * @return Enemy
     */
    public function setEneName($eneName)
    {
        $this->eneName = $eneName;

        return $this;
    }

    /**
     * Get eneName
     *
     * @return string
     */
    public function getEneName()
    {
        return $this->eneName;
    }

    /**
     * Set eneStamina
     *
     * @param integer $eneStamina
     *
     * @return Enemy
     */
    public function setEneStamina($eneStamina)
    {
        $this->eneStamina = $eneStamina;

        return $this;
    }

    /**
     * Get eneStamina
     *
     * @return int
     */
    public function getEneStamina()
    {
        return $this->eneStamina;
    }

    /**
     * Set eneFitness
     *
     * @param integer $eneFitness
     *
     * @return Enemy
     */
    public function setEneFitness($eneFitness)
    {
        $this->eneFitness = $eneFitness;

        return $this;
    }

    /**
     * Get eneFitness
     *
     * @return int
     */
    public function getEneFitness()
    {
        return $this->eneFitness;
    }
}

