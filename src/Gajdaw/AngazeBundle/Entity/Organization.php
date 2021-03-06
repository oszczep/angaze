<?php

namespace Gajdaw\AngazeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
/**
 * Organizations
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Organization
{
    /**
     * @var integer
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
     * @ORM\Column(name="curator", type="string", length=255)
     */
    private $curator;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(length=128, unique=false, nullable=true)
     */
    private $slug;

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
     * @param  string       $name
     * @return Organization
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
     * Set Curator
     *
     * @param  string       $curator
     * @return Organization
     */
    public function setCurator($curator)
    {
        $this->curator = $curator;

        return $this;
    }

    /**
     * Get curator
     *
     * @return string
     */
    public function getCurator()
    {
        return $this->curator;
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

}
