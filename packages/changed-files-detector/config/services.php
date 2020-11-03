<?php

declare (strict_types=1);
namespace _PhpScoperaad82bb90a86;

use _PhpScoperaad82bb90a86\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperaad82bb90a86\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperaad82bb90a86\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperaad82bb90a86\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperaad82bb90a86\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoperaad82bb90a86\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
