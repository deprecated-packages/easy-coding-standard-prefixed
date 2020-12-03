<?php

declare (strict_types=1);
namespace _PhpScoperba5852cc6147;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperba5852cc6147\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperba5852cc6147\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
