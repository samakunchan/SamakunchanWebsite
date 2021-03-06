<?php

namespace SAM\PortfolioBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use SAM\PortfolioBundle\Entity\Image;
use SAM\PortfolioBundle\Entity\Technology;


/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="SAM\PortfolioBundle\Repository\ProjectRepository")
 */
class Project
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, unique=true)
     */
    private $url;

    /**
     * @ORM\ManyToMany(targetEntity="SAM\PortfolioBundle\Entity\Image", cascade={"persist", "remove"})
     *  @ORM\JoinTable(name="sam_images")
     */
    private $images;

    /**
     * @ORM\ManyToMany(targetEntity="SAM\PortfolioBundle\Entity\Technology", cascade={"persist"})
     * @ORM\JoinTable(name="sam_technology")
     */
    private $technologies;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->technologies = new ArrayCollection();
        $this->images = new ArrayCollection();
    }


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
     * Set name
     *
     * @param string $name
     *
     * @return Project
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Project
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Add images
     *
     * @param Image $images
     *
     * @return Project
     */
    public function addImage(Image $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param Image $images
     */
    public function removeImage(Image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImage()
    {
        return $this->images;
    }

    /**
     * Add technology
     *
     * @param Technology $technology
     *
     * @return Project
     */
    public function addTechnology(Technology $technology)
    {
        $this->technologies[] = $technology;

        return $this;
    }

    /**
     * Remove technology
     *
     * @param Technology $technology
     */
    public function removeTechnology(Technology $technology)
    {
        $this->technologies->removeElement($technology);
    }

    /**
     * Get technologies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTechnologies()
    {
        return $this->technologies;
    }


    /**
     * @return string
     * For Twig view
     */
    public function getWebPath()
    {
        return __DIR__.'/../../../../web/uploads/img';
    }
}
