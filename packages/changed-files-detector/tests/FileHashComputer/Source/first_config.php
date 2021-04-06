<?php

declare (strict_types=1);
namespace _PhpScoperb6361033cf41;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoperb6361033cf41\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb6361033cf41\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
};
