<?php

declare (strict_types=1);
namespace _PhpScoper3f3a54dd086f;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper3f3a54dd086f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3f3a54dd086f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
