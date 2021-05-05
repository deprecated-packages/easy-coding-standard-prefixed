<?php

declare (strict_types=1);
namespace _PhpScoper6d453419d16a;

use PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff;
use _PhpScoper6d453419d16a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DisallowTabIndentSniff::class);
};
