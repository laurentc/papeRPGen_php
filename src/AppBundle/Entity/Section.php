<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="section")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SectionRepository")
 */
class Section
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
     * @ORM\Column(name="sect_avt_id", type="integer")
     */
    private $secAvtId;

    /**
     * @var int
     *
     * @ORM\Column(name="sect_page", type="integer")
     */
    private $secPage;

    /**
     * @var string
     *
     * @ORM\Column(name="sec_text", type="string", length=4000)
     */
    private $secText;


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
     * Set secId
     *
     * @param integer $secId
     *
     * @return Section
     */
    public function setSecId($secId)
    {
        $this->secId = $secId;

        return $this;
    }

    /**
     * Get secId
     *
     * @return int
     */
    public function getSecId()
    {
        return $this->secId;
    }

    /**
     * Set secAvtId
     *
     * @param integer $secAvtId
     *
     * @return Section
     */
    public function setsecAvtId($secAvtId)
    {
        $this->secAvtId = $secAvtId;

        return $this;
    }

    /**
     * Get secAvtId
     *
     * @return int
     */
    public function getsecAvtId()
    {
        return $this->secAvtId;
    }

    /**
     * Set secPage
     *
     * @param integer $secPage
     *
     * @return Section
     */
    public function setsecPage($secPage)
    {
        $this->secPage = $secPage;

        return $this;
    }

    /**
     * Get secPage
     *
     * @return int
     */
    public function getsecPage()
    {
        return $this->secPage;
    }

    /**
     * Set secText
     *
     * @param string $secText
     *
     * @return Section
     */
    public function setSecText($secText)
    {
        $this->secText = $secText;

        return $this;
    }

    /**
     * Get secText
     *
     * @return string
     */
    public function getSecText()
    {
        return $this->secText;
    }
}

