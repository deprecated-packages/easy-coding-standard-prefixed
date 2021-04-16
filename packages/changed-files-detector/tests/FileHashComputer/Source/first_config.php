<?php

declare (strict_types=1);
namespace _PhpScopereb9508917a55;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScopereb9508917a55\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DeclareStrictTypesFixer::class);
};
