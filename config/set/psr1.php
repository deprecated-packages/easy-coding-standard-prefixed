<?php

declare (strict_types=1);
namespace _PhpScoper28625551a513;

use PhpCsFixer\Fixer\Basic\EncodingFixer;
use PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer;
use _PhpScoper28625551a513\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper28625551a513\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
};
