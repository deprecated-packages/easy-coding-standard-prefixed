<?php

declare (strict_types=1);
namespace _PhpScopercc9aec205203;

use _PhpScopercc9aec205203\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScopercc9aec205203\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScopercc9aec205203\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScopercc9aec205203\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopercc9aec205203\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercc9aec205203\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScopercc9aec205203\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScopercc9aec205203\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopercc9aec205203\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScopercc9aec205203\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScopercc9aec205203\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
