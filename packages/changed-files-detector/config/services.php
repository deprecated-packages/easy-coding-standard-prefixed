<?php

declare (strict_types=1);
namespace _PhpScoperd3d57724c802;

use _PhpScoperd3d57724c802\Symfony\Component\Cache\Adapter\Psr16Adapter;
use _PhpScoperd3d57724c802\Symfony\Component\Cache\Adapter\TagAwareAdapter;
use _PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function _PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\ChangedFilesDetector\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd3d57724c802\Symfony\Component\Cache\Adapter\Psr16Adapter::class);
    $services->set(\_PhpScoperd3d57724c802\Symfony\Component\Cache\Adapter\TagAwareAdapter::class)->args(['$itemsPool' => \_PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperd3d57724c802\Symfony\Component\Cache\Adapter\Psr16Adapter::class), '$tagsPool' => \_PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\service(\_PhpScoperd3d57724c802\Symfony\Component\Cache\Adapter\Psr16Adapter::class)]);
};
