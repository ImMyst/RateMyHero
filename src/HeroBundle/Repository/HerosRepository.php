<?php
namespace HeroBundle\Repository;
use Symfony\Component\Finder\Finder;
use HeroBundle\Entity\Hero;
use HeroBundle\Entity\Review;

class HerosRepository extends \Doctrine\ORM\EntityRepository
{
    public function findById(int $heroId): ?Heros
    {
        $herosRepository = new HerosRepository();
        $hero = $herosRepository->findAllHeros();
        foreach($heros as $hero) {
            foreach ($hero->getHeros() as $hero) {
                if ($hero->getId() === $heroId) {
                    return $hero;
                }
            }
        }

        return null;
    }
}
