<?php

declare (strict_types=1);
namespace _PhpScoper28625551a513;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper28625551a513\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper28625551a513\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
