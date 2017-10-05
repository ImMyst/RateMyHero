<?php
namespace HeroBundle\Repository;
use Symfony\Component\Finder\Finder;
use StudentBundle\Entity\Heros;
use StudentBundle\Entity\Review;
class HerosRepository
{
    public function findById(int $heroId): ?Heros
    {
        $reviewRepository = new ReviewRepository();
        $reviews = $reviewRepository->findAllReviews();
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
