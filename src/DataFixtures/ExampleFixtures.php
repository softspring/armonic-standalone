<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;
use Softspring\CmsBundle\Data\DataImporter;
use Softspring\CmsBundle\Data\Exception\DataTransformerNotFoundException;
use Softspring\CmsBundle\Model\ContentVersionInterface;
use Softspring\CmsBundle\Utils\ZipContent;

class ExampleFixtures extends Fixture implements FixtureGroupInterface
{
    public function __construct(protected DataImporter $dataImporter)
    {
    }

    /**
     * @throws DataTransformerNotFoundException
     */
    public function load(ObjectManager $manager): void
    {
        $data = ZipContent::read('./src/DataFixtures/example/', 'home-page-v1.zip');

        $this->dataImporter->import($data, ['version_origin' => ContentVersionInterface::ORIGIN_IMPORT]);
    }

    public static function getGroups(): array
    {
        return ['test'];
    }
}
