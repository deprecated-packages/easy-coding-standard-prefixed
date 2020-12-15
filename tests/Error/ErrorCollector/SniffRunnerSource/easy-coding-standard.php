<?php

declare (strict_types=1);
namespace _PhpScoper839420027581;

use SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff;
use _PhpScoper839420027581\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper839420027581\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
};
