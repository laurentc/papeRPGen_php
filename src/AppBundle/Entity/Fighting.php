<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fighting
 *
 * @ORM\Table(name="fighting")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FightingRepository")
 */
class Fighting
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
     * @var int
     *
     * @ORM\Column(name="fig_sec_page", type="integer")
     */
    private $figSecPage;

    /**
     * @var string
     *
     * @ORM\Column(name="fig_ene_code", type="string", length=255)
     */
    private $figEneCode;


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
     * Set figId
     *
     * @param integer $figId
     *
     * @return Fighting
     */
    public function setFigId($figId)
    {
        $this->figId = $figId;

        return $this;
    }

    /**
     * Get figId
     *
     * @return int
     */
    public function getFigId()
    {
        return $this->figId;
    }

    /**
     * Set figSecPage
     *
     * @param integer $figSecPage
     *
     * @return Fighting
     */
    public function setFigSecPage($figSecPage)
    {
        $this->figSecPage = $figSecPage;

        return $this;
    }

    /**
     * Get figSecPage
     *
     * @return int
     */
    public function getFigSecPage()
    {
        return $this->figSecPage;
    }

    /**
     * Set figEneCode
     *
     * @param string $figEneCode
     *
     * @return Fighting
     */
    public function setFigEneCode($figEneCode)
    {
        $this->figEneCode = $figEneCode;

        return $this;
    }

    /**
     * Get figEneCode
     *
     * @return string
     */
    public function getFigEneCode()
    {
        return $this->figEneCode;
    }
}

