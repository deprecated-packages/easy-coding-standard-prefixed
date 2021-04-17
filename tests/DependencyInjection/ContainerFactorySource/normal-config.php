<?php

declare (strict_types=1);
namespace _PhpScoper0c575b5c37d7;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper0c575b5c37d7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
