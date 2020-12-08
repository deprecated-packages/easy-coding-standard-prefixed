<?php

declare (strict_types=1);
namespace _PhpScoperf3f1be0d8a30;

use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer;
use _PhpScoperf3f1be0d8a30\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf3f1be0d8a30\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class)->call('configure', [['elements' => ['const', 'property', 'method']]]);
    $services->set(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
