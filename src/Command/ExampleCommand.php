<?php

namespace App\Command;

use Softspring\CmsBundle\Data\DataImporter;
use Softspring\CmsBundle\Model\ContentVersionInterface;
use Softspring\CmsBundle\Utils\ZipContent;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExampleCommand extends Command
{
    public function __construct(protected DataImporter $dataImporter,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setName('example:command');
        $this->setDescription('Example command. Creates a new content version from a zip file.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $data = ZipContent::read('./example/', 'home-page-v17-2025-02-03-15-14-29.zip');

            $this->dataImporter->import($data, ['version_origin' => ContentVersionInterface::ORIGIN_IMPORT]);
        } catch (\Exception $e) {
            $output->write($e->getMessage());

            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
