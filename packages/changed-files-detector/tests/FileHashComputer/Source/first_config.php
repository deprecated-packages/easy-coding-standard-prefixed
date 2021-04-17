<?php

declare (strict_types=1);
namespace _PhpScoperfde42a25c345;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoperfde42a25c345\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DeclareStrictTypesFixer::class);
};
