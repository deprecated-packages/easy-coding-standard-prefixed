<?php

declare (strict_types=1);
namespace _PhpScoper5e93f39f19fe;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper5e93f39f19fe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper5e93f39f19fe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
