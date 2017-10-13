<?php
namespace HeroBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Hero
 *
 * @ORM\Table(name="review")
 * @ORM\Entity(repositoryClass="HeroBundle\Repository\HeroRepository")
 */
class Review
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
     * @ORM\Column(name="Note", type="integer")
     */
    private $note;
    /**
     * @var string
     *
     * @ORM\Column(name="Commentary", type="string", length=255, nullable=true)
     */
    private $commentary;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    public function setCommentary($commentary)
    {
        $this->commentary = $commentary;
        return $this;
    }
}
