<?php

declare (strict_types=1);
namespace _PhpScopercfeba9d8ad31;

use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SemicolonSpacingSniff;
use _PhpScopercfeba9d8ad31\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::LINE_ENDING, "\r\n");
    $services = $containerConfigurator->services();
    $services->set(SemicolonSpacingSniff::class);
};
