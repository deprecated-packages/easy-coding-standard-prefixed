<?php

declare (strict_types=1);
namespace _PhpScoper3c4e863e8a34;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use _PhpScoper3c4e863e8a34\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
    $services->set(VisibilityRequiredFixer::class)->call('configure', [['elements' => ['property']]]);
};
