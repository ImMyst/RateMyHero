<?php
namespace HeroBundle\Repository;
use Symfony\Component\Finder\Finder;
use StudentBundle\Entity\Hero;
use StudentBundle\Entity\Review;
class ReviewRepository
{
    public function findById(int $reviewsId): ?Review
    {
        $reviewsRepository = new ReviewRepository();
        $reviews = $reviewRepository->findAllHeros();
        foreach($reviews as $review) {
            foreach ($hero->getHeros() as $hero) {
                if ($hero->getId() === $heroId) {
                    return $hero;
                }
            }
        }

        return null;
    }
}
