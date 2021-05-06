<?php

declare (strict_types=1);
namespace _PhpScopera48d5dbb002d;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScopera48d5dbb002d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
