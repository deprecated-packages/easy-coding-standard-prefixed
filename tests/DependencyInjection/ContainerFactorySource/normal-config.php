<?php

declare (strict_types=1);
namespace _PhpScoper2dc059b3a969;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper2dc059b3a969\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
