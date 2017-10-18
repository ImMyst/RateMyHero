<?php
namespace HeroBundle\Repository;
use Symfony\Component\Finder\Finder;
use HeroBundle\Entity\Hero;
use HeroBundle\Entity\Review;
class ReviewRepository extends \Doctrine\ORM\EntityRepository
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
