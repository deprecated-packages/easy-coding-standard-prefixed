<?php

declare (strict_types=1);
namespace _PhpScoper32abeec2fe5a;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper32abeec2fe5a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
