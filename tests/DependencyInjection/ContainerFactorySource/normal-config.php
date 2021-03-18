<?php

declare (strict_types=1);
namespace _PhpScoper5f6e904600e7;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper5f6e904600e7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper5f6e904600e7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
