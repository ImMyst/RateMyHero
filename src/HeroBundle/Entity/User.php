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
     * @ORM\Column(name="pseudo", type="string", length=255, nullable=true)
     */
    private $pseudo;

      /**
    * @var string
    *
    * @ORM\Column(name="password", type="string", length=255)
      */
    private $password;

    /**
    * @var array
 *
 * @ORM\Column(name="roles", type="array")
 */
    private $roles;

    /**
     * Get pseudo
     *
     * @return int
     */
    public function setPseudo()
    {
        return $this->pseudo;
    }
    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
 * Set roles
 *
    * @param array $roles
 *
    * @return User
 */
    public function setRoles($roles)
{
    $this->roles = $roles;
    return $this;
}
/**
 * Get roles
 *
 * @return array
 */
    public function getRoles()
{
    return $this->roles;
}

}
