<?php

declare (strict_types=1);
namespace _PhpScoperd8b12759ee0d;

use SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff;
use _PhpScoperd8b12759ee0d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd8b12759ee0d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
};
