<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c;

use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer;
use _PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera8f555a7493c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class)->call('configure', [['elements' => ['const', 'property', 'method']]]);
    $services->set(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
