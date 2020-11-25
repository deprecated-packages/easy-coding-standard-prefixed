<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer;
use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer::class);
};
