<?php

declare (strict_types=1);
namespace _PhpScoperb383f16e851e;

use _PhpScoperb383f16e851e\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperb383f16e851e\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb383f16e851e\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperb383f16e851e\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperb383f16e851e\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperb383f16e851e\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
