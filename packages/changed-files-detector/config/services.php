<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38;

use _PhpScoperca8ca183ac38\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperca8ca183ac38\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperca8ca183ac38\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperca8ca183ac38\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperca8ca183ac38\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperca8ca183ac38\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
