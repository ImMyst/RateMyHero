<?php
namespace HeroBundle\Repository;
use Symfony\Component\Finder\Finder;
use HeroBundle\Entity\Film;
use HeroBundle\Entity\Hero;

class FilmRepository extends \Doctrine\ORM\EntityRepository
{
    public function findById(int $filmId): ?Films
    {
        $filmsRepository = new FilmRepository();
        $film = $filmsRepository->findAllFilms();
        foreach($films as $film) {
            foreach ($film->getFilms() as $film) {
                if ($film->getId() === $filmId) {
                    return $film;
                  }
              }
          }

          return null;
      }
  }
