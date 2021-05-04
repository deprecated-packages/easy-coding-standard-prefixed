<?php

declare (strict_types=1);
namespace _PhpScoperc7a2896cc805;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoperc7a2896cc805\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DeclareStrictTypesFixer::class);
};
