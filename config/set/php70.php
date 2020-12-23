<?php

declare (strict_types=1);
namespace _PhpScoperd9fcac9e904f;

use PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer;
use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer;
use PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer;
use PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use SlevomatCodingStandard\Sniffs\Exceptions\ReferenceThrowableOnlySniff;
use _PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Fixer\Strict\BlankLineAfterStrictTypesFixer;
return static function (\_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
    $services->set(\PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer::class)->call('configure', [['mt_rand' => 'random_int', 'rand' => 'random_int']]);
    $services->set(\PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
    $services->set(\Symplify\CodingStandard\Fixer\Strict\BlankLineAfterStrictTypesFixer::class);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Exceptions\ReferenceThrowableOnlySniff::class);
};
