<?php

declare (strict_types=1);
namespace _PhpScoper5686a261d89c;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoper5686a261d89c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DeclareStrictTypesFixer::class);
};
