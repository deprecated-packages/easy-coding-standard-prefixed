<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb;

use PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LanguageConstructSpacingSniff;
use PhpCsFixer\Fixer\ControlStructure\IncludeFixer;
use PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer;
use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff::class);
    // See https://github.com/symplify/symplify/issues/1702
    $services->set(\PhpCsFixer\Fixer\ControlStructure\IncludeFixer::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LanguageConstructSpacingSniff::class);
};
