<?php

declare (strict_types=1);
namespace _PhpScoper3a22e8e0bd94;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper3a22e8e0bd94\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3a22e8e0bd94\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
