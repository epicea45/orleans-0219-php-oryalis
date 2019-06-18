<?php

namespace App\DataFixtures;

use App\Entity\Training;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class TrainingFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i= 1; $i <= 10; $i++) {
            $training = new Training();
            $training->setTitle($faker->sentence);
            $training->setPeriod($faker->monthName);
            $training->setPublic($faker->word);
            $training->setPedagogy($faker->text);
            $training->setTrainer($faker->word);
            $training->setProgram($faker->text);

            $manager->persist($training);
        }
        $manager->flush();
    }
}
