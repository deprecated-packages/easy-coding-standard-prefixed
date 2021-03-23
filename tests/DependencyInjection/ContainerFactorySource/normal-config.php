<?php

declare (strict_types=1);
namespace _PhpScoper35ec99c463ee;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper35ec99c463ee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper35ec99c463ee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
