<?php

declare (strict_types=1);
namespace _PhpScoper5928e324b45e;

use _PhpScoper5928e324b45e\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoper5928e324b45e\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoper5928e324b45e\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper5928e324b45e\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoper5928e324b45e\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoper5928e324b45e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper5928e324b45e\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoper5928e324b45e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\_PhpScoper5928e324b45e\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
