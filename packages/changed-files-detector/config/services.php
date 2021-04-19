<?php

declare (strict_types=1);
namespace _PhpScoper1c0f546920a5;

use _PhpScoper1c0f546920a5\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper1c0f546920a5\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoper1c0f546920a5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper1c0f546920a5\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(Psr16Adapter::class);
    $services->set(TagAwareAdapter::class)->args(['$itemsPool' => service(Psr16Adapter::class), '$tagsPool' => service(Psr16Adapter::class)]);
};
