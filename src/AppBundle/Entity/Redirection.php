<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Redirection
 *
 * @ORM\Table(name="redirection")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RedirectionRepository")
 */
class Redirection
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
     * @ORM\Column(name="red_sec_page_from", type="integer")
     */
    private $redSecPageFrom;

    /**
     * @var int
     *
     * @ORM\Column(name="red_sec_page_to", type="integer")
     */
    private $redSecPageTo;

    /**
     * @var string
     *
     * @ORM\Column(name="red_label", type="string", length=1000)
     */
    private $redLabel;


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
     * Set redId
     *
     * @param integer $redId
     *
     * @return Redirection
     */
    public function setRedId($redId)
    {
        $this->redId = $redId;

        return $this;
    }

    /**
     * Get redId
     *
     * @return int
     */
    public function getRedId()
    {
        return $this->redId;
    }

    /**
     * Set redSecPageFrom
     *
     * @param integer $redSecPageFrom
     *
     * @return Redirection
     */
    public function setRedSecPageFrom($redSecPageFrom)
    {
        $this->redSecPageFrom = $redSecPageFrom;

        return $this;
    }

    /**
     * Get redSecPageFrom
     *
     * @return int
     */
    public function getRedSecPageFrom()
    {
        return $this->redSecPageFrom;
    }

    /**
     * Set redSecPageTo
     *
     * @param integer $redSecPageTo
     *
     * @return Redirection
     */
    public function setRedSecPageTo($redSecPageTo)
    {
        $this->redSecPageTo = $redSecPageTo;

        return $this;
    }

    /**
     * Get redSecPageTo
     *
     * @return int
     */
    public function getRedSecPageTo()
    {
        return $this->redSecPageTo;
    }

    /**
     * Set redLabel
     *
     * @param string $redLabel
     *
     * @return Redirection
     */
    public function setRedLabel($redLabel)
    {
        $this->redLabel = $redLabel;

        return $this;
    }

    /**
     * Get redLabel
     *
     * @return string
     */
    public function getRedLabel()
    {
        return $this->redLabel;
    }
}

