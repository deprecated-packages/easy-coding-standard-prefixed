<?php

declare (strict_types=1);
namespace _PhpScoper917c99b6aa4c;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoper917c99b6aa4c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DeclareStrictTypesFixer::class);
};
