<?php

declare (strict_types=1);
namespace _PhpScoper0752b31150a1;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper0752b31150a1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
