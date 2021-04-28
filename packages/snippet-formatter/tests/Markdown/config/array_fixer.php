<?php

declare (strict_types=1);
namespace _PhpScoper1b2f8b9c0339;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper1b2f8b9c0339\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Fixer\ArrayNotation\ArrayOpenerAndCloserNewlineFixer;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
    $services->set(ArrayOpenerAndCloserNewlineFixer::class);
};
