<?php
namespace HeroBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Hero
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="HeroBundle\Repository\HeroRepository")
 */
class User
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
     * @ORM\Column(name="Pseudo", type="string", length=255, nullable=true)
     */
    private $pseudo;
    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=255, nullable=true)
     */
    private $password;
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
     * @var string
     *
     * @ORM\Column(name="Film", type="string", length=255, nullable=true)
     */
    private $film;
    /**
     * Set hero
     *
     * @param string $hero
     *
     * @return Hero
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
        return $this;
    }
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set type
     *
     * @param string $type
     *
     * @return User
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
