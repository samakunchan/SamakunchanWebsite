<?php

namespace SAM\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SAM\PortfolioBundle\Entity\Image;

/**
 * Certification
 *
 * @ORM\Table(name="certification")
 * @ORM\Entity(repositoryClass="SAM\PortfolioBundle\Repository\CertificationRepository")
 */
class Certification
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="certifNumber", type="string", length=255)
     */
    private $certifNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var array
     *
     * @ORM\Column(name="technoUsed", type="array")
     */
    private $technoUsed;

    /**
     * @ORM\OneToOne(targetEntity="SAM\PortfolioBundle\Entity\Image", cascade={"persist"})
     */
    private $image;


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
     * Set title
     *
     * @param string $title
     *
     * @return Certification
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set certifNumber
     *
     * @param string $certifNumber
     *
     * @return Certification
     */
    public function setCertifNumber($certifNumber)
    {
        $this->certifNumber = $certifNumber;

        return $this;
    }

    /**
     * Get certifNumber
     *
     * @return string
     */
    public function getCertifNumber()
    {
        return $this->certifNumber;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Certification
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
     * Set technoUsed
     *
     * @param array $technoUsed
     *
     * @return Certification
     */
    public function setTechnoUsed($technoUsed)
    {
        $this->technoUsed = $technoUsed;

        return $this;
    }

    /**
     * Get technoUsed
     *
     * @return array
     */
    public function getTechnoUsed()
    {
        return $this->technoUsed;
    }

    /**
     * Set image
     *
     * @param Image $image
     *
     * @return Certification
     */
    public function setImage(Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }
}
