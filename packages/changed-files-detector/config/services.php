<?php

declare (strict_types=1);
namespace _PhpScoperdebd9d705540;

use _PhpScoperdebd9d705540\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperdebd9d705540\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdebd9d705540\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperdebd9d705540\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperdebd9d705540\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperdebd9d705540\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
