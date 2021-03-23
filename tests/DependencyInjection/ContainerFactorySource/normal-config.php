<?php

declare (strict_types=1);
namespace _PhpScoper08686b2277af;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper08686b2277af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper08686b2277af\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
