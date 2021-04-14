<?php

declare (strict_types=1);
namespace _PhpScoperd32e35cfad84;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixer;
use _PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixer::class);
};
