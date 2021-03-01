<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f;

use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SemicolonSpacingSniff;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (\_PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::LINE_ENDING, "\r\n");
    $services = $containerConfigurator->services();
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SemicolonSpacingSniff::class);
};
