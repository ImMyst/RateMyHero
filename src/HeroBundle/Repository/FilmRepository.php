<?php
namespace HeroBundle\Repository;
use Symfony\Component\Finder\Finder;
use StudentBundle\Entity\Film;
use StudentBundle\Entity\Hero;

class FilmRepository
/*
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
}*/
