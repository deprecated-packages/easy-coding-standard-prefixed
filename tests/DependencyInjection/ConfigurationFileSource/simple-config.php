<?php

declare (strict_types=1);
namespace _PhpScoperf5f75c22067b;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
