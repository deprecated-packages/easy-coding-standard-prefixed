<?php

declare (strict_types=1);
namespace _PhpScoper56c9df53a081;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper56c9df53a081\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper56c9df53a081\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
