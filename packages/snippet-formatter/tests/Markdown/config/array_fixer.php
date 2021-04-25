<?php

declare (strict_types=1);
namespace _PhpScoperff1e514762b4;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperff1e514762b4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Fixer\ArrayNotation\ArrayOpenerAndCloserNewlineFixer;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
    $services->set(ArrayOpenerAndCloserNewlineFixer::class);
};
