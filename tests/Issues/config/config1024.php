<?php

declare (strict_types=1);
namespace _PhpScoper39d23eef9a06;

use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SemicolonSpacingSniff;
use _PhpScoper39d23eef9a06\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (\_PhpScoper39d23eef9a06\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::LINE_ENDING, "\r\n");
    $services = $containerConfigurator->services();
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SemicolonSpacingSniff::class);
};
