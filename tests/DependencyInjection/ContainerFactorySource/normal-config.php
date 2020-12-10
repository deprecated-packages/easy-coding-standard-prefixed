<?php

declare (strict_types=1);
namespace _PhpScoperf7b66f9e3817;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperf7b66f9e3817\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf7b66f9e3817\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
