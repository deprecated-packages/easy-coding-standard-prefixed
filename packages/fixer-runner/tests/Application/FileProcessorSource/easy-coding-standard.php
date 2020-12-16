<?php

declare (strict_types=1);
namespace _PhpScoperd35c27cd4b09;

use PHP_CodeSniffer\Standards\Squiz\Sniffs\Arrays\ArrayDeclarationSniff;
use PhpCsFixer\Fixer\ArrayNotation\NoTrailingCommaInSinglelineArrayFixer;
use PhpCsFixer\Fixer\Basic\EncodingFixer;
use PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer;
use _PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    // priority 0 - lower last
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\NoTrailingCommaInSinglelineArrayFixer::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Arrays\ArrayDeclarationSniff::class);
    // priority 100 - higher first
    $services->set(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    // priority 98
    $services->set(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
};
