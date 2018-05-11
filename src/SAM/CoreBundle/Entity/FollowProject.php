<?php

namespace SAM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FollowProject
 *
 * @ORM\Table(name="follow_project")
 * @ORM\Entity(repositoryClass="SAM\CoreBundle\Repository\FollowProjectRepository")
 */
class FollowProject
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
     * @ORM\Column(name="nameRepo", type="string", length=255)
     */
    private $nameRepo;

    /**
     * @var string
     *
     * @ORM\Column(name="descrFr", type="string", length=255)
     */
    private $descrFr;

    /**
     * @var string
     *
     * @ORM\Column(name="descrEn", type="string", length=255)
     */
    private $descrEn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="showTheProject", type="boolean")
     */
    private $showTheProject;

    public function __construct()
    {
        $this->showTheProject = false;
    }
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
     * Set nameRepo
     *
     * @param string $nameRepo
     *
     * @return FollowProject
     */
    public function setNameRepo($nameRepo)
    {
        $this->nameRepo = $nameRepo;

        return $this;
    }

    /**
     * Get nameRepo
     *
     * @return string
     */
    public function getNameRepo()
    {
        return $this->nameRepo;
    }

    /**
     * Set descrFr
     *
     * @param string $descrFr
     *
     * @return FollowProject
     */
    public function setDescrFr($descrFr)
    {
        $this->descrFr = $descrFr;

        return $this;
    }

    /**
     * Get descrFr
     *
     * @return string
     */
    public function getDescrFr()
    {
        return $this->descrFr;
    }

    /**
     * Set descrEn
     *
     * @param string $descrEn
     *
     * @return FollowProject
     */
    public function setDescrEn($descrEn)
    {
        $this->descrEn = $descrEn;

        return $this;
    }

    /**
     * Get descrEn
     *
     * @return string
     */
    public function getDescrEn()
    {
        return $this->descrEn;
    }

    /**
     * Set show
     *
     * @param boolean $show
     *
     * @return FollowProject
     */
    public function setShow($show)
    {
        $this->show = $show;

        return $this;
    }

    /**
     * Get show
     *
     * @return boolean
     */
    public function getShow()
    {
        return $this->show;
    }

    /**
     * Set showTheProject
     *
     * @param string $showTheProject
     *
     * @return FollowProject
     */
    public function setShowTheProject($showTheProject)
    {
        $this->showTheProject = $showTheProject;

        return $this;
    }

    /**
     * Get showTheProject
     *
     * @return string
     */
    public function getShowTheProject()
    {
        return $this->showTheProject;
    }
}
