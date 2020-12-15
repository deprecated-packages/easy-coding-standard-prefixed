<?php

declare (strict_types=1);
namespace _PhpScoper6a1dd9b8a650;

use SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff;
use _PhpScoper6a1dd9b8a650\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6a1dd9b8a650\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
};
