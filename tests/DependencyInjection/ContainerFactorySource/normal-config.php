<?php

declare (strict_types=1);
namespace _PhpScopere7e518ee6a5b;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScopere7e518ee6a5b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
