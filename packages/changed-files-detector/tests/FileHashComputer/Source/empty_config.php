<?php

declare (strict_types=1);
namespace _PhpScoper8cb97064581a;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixer;
use _PhpScoper8cb97064581a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8cb97064581a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixer::class);
};
