<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e;

use _PhpScoperecb978830f1e\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperecb978830f1e\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperecb978830f1e\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperecb978830f1e\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperecb978830f1e\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperecb978830f1e\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
