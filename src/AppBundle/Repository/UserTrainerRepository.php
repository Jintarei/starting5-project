<?php

namespace AppBundle\Repository;

/**
 * UserTrainerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserTrainerRepository extends \Doctrine\ORM\EntityRepository
{
    public function checkTrainer($user, $trainer)
    {
        $userTrainer = $this->findOneBy(['userId' => $user, 'trainerId' => $trainer]);

        return empty($userTrainer);
    }
}