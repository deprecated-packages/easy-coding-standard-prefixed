<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
