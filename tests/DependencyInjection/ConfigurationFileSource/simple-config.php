<?php

declare (strict_types=1);
namespace _PhpScoperac4e86be08e5;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
