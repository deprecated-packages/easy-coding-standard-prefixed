<?php

declare (strict_types=1);
namespace _PhpScoper7e6a1331d94a;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper7e6a1331d94a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
