<?php

declare (strict_types=1);
namespace _PhpScoper37a255897161;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper37a255897161\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper37a255897161\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
