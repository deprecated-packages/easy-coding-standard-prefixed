<?php

declare (strict_types=1);
namespace _PhpScoperd3d57724c802;

use _PhpScoperd3d57724c802\PhpParser\BuilderFactory;
use _PhpScoperd3d57724c802\PhpParser\NodeFinder;
use _PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperd3d57724c802\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperd3d57724c802\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperd3d57724c802\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperd3d57724c802\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
