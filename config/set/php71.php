<?php

declare (strict_types=1);
namespace _PhpScoper269dc521b0fa;

use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer;
use PhpCsFixer\Fixer\ListNotation\ListSyntaxFixer;
use PhpCsFixer\Fixer\Whitespace\CompactNullableTypehintFixer;
use SlevomatCodingStandard\Sniffs\TypeHints\NullableTypeForNullDefaultValueSniff;
use _PhpScoper269dc521b0fa\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper269dc521b0fa\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class)->call('configure', [['elements' => ['const', 'property', 'method']]]);
    $services->set(\PhpCsFixer\Fixer\ListNotation\ListSyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
    $services->set(\SlevomatCodingStandard\Sniffs\TypeHints\NullableTypeForNullDefaultValueSniff::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\CompactNullableTypehintFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer::class);
};
