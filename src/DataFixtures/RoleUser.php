<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class RoleUser extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        // for ($i = 1 ; $i <=10; $i++) {
        //     $RoleUser = new RoleUser();

        // }

        $manager->flush();
    }
}
