<?php

declare (strict_types=1);
namespace _PhpScopera51a90153f58;

use SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff;
use _PhpScopera51a90153f58\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera51a90153f58\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
};
