<?php

declare (strict_types=1);
namespace _PhpScopera22bb3f4d7b7;

use _PhpScopera22bb3f4d7b7\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopera22bb3f4d7b7\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopera22bb3f4d7b7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopera22bb3f4d7b7\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(Psr16Adapter::class);
    $services->set(TagAwareAdapter::class)->args(['$itemsPool' => service(Psr16Adapter::class), '$tagsPool' => service(Psr16Adapter::class)]);
};
