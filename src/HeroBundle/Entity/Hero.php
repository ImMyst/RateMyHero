<?php

namespace HeroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hero
 *
 * @ORM\Table(name="hero")
 * @ORM\Entity(repositoryClass="HeroBundle\Repository\HeroRepository")
 */
class Hero
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
     * @ORM\Column(name="Hero", type="string", length=255, nullable=true)
     */
    private $hero;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=255, nullable=true)
     */
    private $type;




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
     * Set hero
     *
     * @param string $hero
     *
     * @return Hero
     */
    public function setHero($hero)
    {
        $this->hero = $hero;

        return $this;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get hero
     *
     * @return string
     */
    public function getHero()
    {
        return $this->hero;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Hero
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
