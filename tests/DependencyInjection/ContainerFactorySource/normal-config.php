<?php

declare (strict_types=1);
namespace _PhpScoper64e7ad844899;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper64e7ad844899\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper64e7ad844899\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
