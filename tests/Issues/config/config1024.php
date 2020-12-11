<?php

declare (strict_types=1);
namespace _PhpScoperc7c7dddc9238;

use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SemicolonSpacingSniff;
use _PhpScoperc7c7dddc9238\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (\_PhpScoperc7c7dddc9238\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::LINE_ENDING, "\r\n");
    $services = $containerConfigurator->services();
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SemicolonSpacingSniff::class);
};
