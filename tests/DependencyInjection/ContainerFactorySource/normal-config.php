<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
