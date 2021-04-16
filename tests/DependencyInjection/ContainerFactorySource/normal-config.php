<?php

declare (strict_types=1);
namespace _PhpScoper9385100df341;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper9385100df341\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
