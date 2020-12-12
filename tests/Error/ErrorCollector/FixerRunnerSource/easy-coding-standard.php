<?php

declare (strict_types=1);
namespace _PhpScoper04022cd986ec;

use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer;
use _PhpScoper04022cd986ec\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper04022cd986ec\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class)->call('configure', [['elements' => ['const', 'property', 'method']]]);
    $services->set(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
