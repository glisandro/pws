<?php

// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\Resource;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $resource  = new Resource();
            $resource->setText('Font Awesome ' . $i);
            $resource->setCode('<i class="fas fa-camera-retro"></i>');
            $resource->setType('fontawesome');
            $resource->setUrl('http://fontawesome.com/');
            $resource->setDescription('Descr'. $i);
            $manager->persist($resource);
        }

        for ($i = 0; $i < 10; $i++) {
            $resource  = new Resource();
            $resource->setText('cheat ' . $i);
            //$resource->setCode('<i class="fas fa-camera-retro"></i>');
            $resource->setType('cheatsheet');
            $resource->setUrl('http://cheatsheet.com/');
            $resource->setDescription('Descr'. $i);
            $manager->persist($resource);
        }

        $manager->flush();
    }
}