<?php

declare (strict_types=1);
namespace _PhpScopere72a8aaba560;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScopere72a8aaba560\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DeclareStrictTypesFixer::class);
};
