<?php
namespace HeroBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Movie
 *
 * @ORM\Table(name="Film")
 * @ORM\Entity(repositoryClass="HeroBundle\Repository\FilmRepository")
 */
class Film
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
     * @ORM\Column(name="Title", type="string", length=255, nullable=true)
     */
    public $title;
    /**
     * @var int
     *
     * @ORM\Column(name="Year", type="integer")
     */
    public $year;
    /**
     * @var string
     *
     * @ORM\Column(name="Producer", type="string", length=255, nullable=true)
     */
    public $producer;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setProducer($producer)
    {
        $this->producer = $producer;
        return $this;
    }

    public function getProducer()
    {
        return $this->producer;
    }
}
