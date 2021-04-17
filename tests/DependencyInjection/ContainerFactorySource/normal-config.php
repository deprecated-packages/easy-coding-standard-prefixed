<?php

declare (strict_types=1);
namespace _PhpScoper45e1bde0f567;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper45e1bde0f567\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
