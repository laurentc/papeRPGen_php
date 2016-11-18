<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreAction
 *
 * @ORM\Table(name="pre_action")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PreActionRepository")
 */
class PreAction
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
     * @ORM\Column(name="pac_sec_page", type="integer")
     */
    private $pacSecPage;

    /**
     * @var string
     *
     * @ORM\Column(name="pac_attribute", type="string", length=255)
     */
    private $pacAttribute;

    /**
     * @var string
     *
     * @ORM\Column(name="pac_method", type="string", length=1)
     */
    private $pacMethod;

    /**
     * @var int
     *
     * @ORM\Column(name="pac_value", type="integer")
     */
    private $pacValue;


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
     * Set pacId
     *
     * @param integer $pacId
     *
     * @return PreAction
     */
    public function setPacId($pacId)
    {
        $this->pacId = $pacId;

        return $this;
    }

    /**
     * Get pacId
     *
     * @return int
     */
    public function getPacId()
    {
        return $this->pacId;
    }

    /**
     * Set pacSecPage
     *
     * @param integer $pacSecPage
     *
     * @return PreAction
     */
    public function setPacSecPage($pacSecPage)
    {
        $this->pacSecPage = $pacSecPage;

        return $this;
    }

    /**
     * Get pacSecPage
     *
     * @return int
     */
    public function getPacSecPage()
    {
        return $this->pacSecPage;
    }

    /**
     * Set pacAttribute
     *
     * @param string $pacAttribute
     *
     * @return PreAction
     */
    public function setPacAttribute($pacAttribute)
    {
        $this->pacAttribute = $pacAttribute;

        return $this;
    }

    /**
     * Get pacAttribute
     *
     * @return string
     */
    public function getPacAttribute()
    {
        return $this->pacAttribute;
    }

    /**
     * Set pacMethod
     *
     * @param string $pacMethod
     *
     * @return PreAction
     */
    public function setPacMethod($pacMethod)
    {
        $this->pacMethod = $pacMethod;

        return $this;
    }

    /**
     * Get pacMethod
     *
     * @return string
     */
    public function getPacMethod()
    {
        return $this->pacMethod;
    }

    /**
     * Set pacValue
     *
     * @param integer $pacValue
     *
     * @return PreAction
     */
    public function setPacValue($pacValue)
    {
        $this->pacValue = $pacValue;

        return $this;
    }

    /**
     * Get pacValue
     *
     * @return int
     */
    public function getPacValue()
    {
        return $this->pacValue;
    }
}

