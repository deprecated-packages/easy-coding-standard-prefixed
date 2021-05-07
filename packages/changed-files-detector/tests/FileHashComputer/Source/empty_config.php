<?php

declare (strict_types=1);
namespace _PhpScopercae9e6ab5cea;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixer;
use _PhpScopercae9e6ab5cea\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(CombineConsecutiveIssetsFixer::class);
};
