<?php

declare (strict_types=1);
namespace _PhpScoper629192f0909b;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper629192f0909b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper629192f0909b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
