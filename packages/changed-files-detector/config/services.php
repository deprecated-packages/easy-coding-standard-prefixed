<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745;

use _PhpScoperfacc742d2745\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperfacc742d2745\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfacc742d2745\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperfacc742d2745\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperfacc742d2745\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperfacc742d2745\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
