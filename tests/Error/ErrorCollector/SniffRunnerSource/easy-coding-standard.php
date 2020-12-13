<?php

declare (strict_types=1);
namespace _PhpScoperd3d57724c802;

use SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff;
use _PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
};
