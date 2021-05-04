<?php

declare (strict_types=1);
namespace _PhpScoper653866602a9e;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper653866602a9e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
