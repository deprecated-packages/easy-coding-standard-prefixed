<?php

declare (strict_types=1);
namespace _PhpScoperfcf15c26e033;

use SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff;
use _PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
};
