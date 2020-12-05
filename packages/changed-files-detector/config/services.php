<?php

declare (strict_types=1);
namespace _PhpScoperb6ccec8ab642;

use _PhpScoperb6ccec8ab642\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperb6ccec8ab642\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb6ccec8ab642\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperb6ccec8ab642\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperb6ccec8ab642\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb6ccec8ab642\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperb6ccec8ab642\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperb6ccec8ab642\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperb6ccec8ab642\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperb6ccec8ab642\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperb6ccec8ab642\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
