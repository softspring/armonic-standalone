<?php

return [
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    Softspring\Component\Components\SfsComponentsBundle::class => ['all' => true],
    Softspring\CmsBundle\SfsCmsBundle::class => ['all' => true],
    Softspring\CmsBlogPlugin\SfsCmsBlogPlugin::class => ['all' => true],
    Softspring\CmsTranslationPlugin\SfsCmsTranslationPlugin::class => ['all' => true],
    Softspring\MediaBundle\SfsMediaBundle::class => ['all' => true],
    Softspring\PermissionsBundle\SfsPermissionsBundle::class => ['all' => true],
    Softspring\TwigExtraBundle\SfsTwigExtraBundle::class => ['all' => true],
    Softspring\TimeAgoBundle\SfsTimeAgoBundle::class => ['all' => true],
    Softspring\UserBundle\SfsUserBundle::class => ['all' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true],
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Symfony\WebpackEncoreBundle\WebpackEncoreBundle::class => ['all' => true],
    Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
];
