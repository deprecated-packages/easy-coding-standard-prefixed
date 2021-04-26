<?php

declare (strict_types=1);
namespace _PhpScoperd2a667bd5a98;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperd2a667bd5a98\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Fixer\ArrayNotation\ArrayOpenerAndCloserNewlineFixer;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
    $services->set(ArrayOpenerAndCloserNewlineFixer::class);
};
