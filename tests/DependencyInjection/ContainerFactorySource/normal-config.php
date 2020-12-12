<?php

declare (strict_types=1);
namespace _PhpScoper04022cd986ec;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper04022cd986ec\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper04022cd986ec\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
