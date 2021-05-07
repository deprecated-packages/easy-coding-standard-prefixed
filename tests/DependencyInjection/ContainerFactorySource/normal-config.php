<?php

declare (strict_types=1);
namespace _PhpScoper2dcc760f8ff8;

use _PhpScoper2dcc760f8ff8\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper2dcc760f8ff8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
