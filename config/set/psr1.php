<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79;

use PhpCsFixer\Fixer\Basic\EncodingFixer;
use PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer;
use _PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
};
