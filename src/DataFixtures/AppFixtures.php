<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;
use Softspring\CmsBundle\Config\Model\Module;
use Softspring\CmsBundle\Entity\Page;
use Softspring\CmsBundle\Entity\Route;

class AppFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
        /** @var Content $module */
        /** @var Route $route */
        $route = new Route();
        $route->setId('home');
        $route->setType(1);
        $route->setLinkAttrs('rel="index,follow"');


        $page = new Page();
        $page->setName('Home');
        $page->setDefaultLocale('en');

        $manager->persist($page);
        $manager->flush();


    }

    public static function getGroups(): array
    {
        return ['test'];
    }
}

