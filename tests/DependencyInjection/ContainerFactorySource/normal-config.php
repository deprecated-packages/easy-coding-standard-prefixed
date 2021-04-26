<?php

declare (strict_types=1);
namespace _PhpScoperc5e9eb67638f;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperc5e9eb67638f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
