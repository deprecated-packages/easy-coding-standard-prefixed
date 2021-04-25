<?php

declare (strict_types=1);
namespace _PhpScoper6b1da46bea54;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoper6b1da46bea54\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DeclareStrictTypesFixer::class);
};
