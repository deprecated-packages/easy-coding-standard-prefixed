<?php

declare (strict_types=1);
namespace _PhpScoper22e359cd1ab0;

use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer;
use _PhpScoper22e359cd1ab0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(VisibilityRequiredFixer::class)->call('configure', [['elements' => ['const', 'property', 'method']]]);
    $services->set(SingleBlankLineAtEofFixer::class);
};
