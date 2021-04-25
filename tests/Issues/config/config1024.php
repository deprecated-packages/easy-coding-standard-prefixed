<?php

declare (strict_types=1);
namespace _PhpScoperff1e514762b4;

use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SemicolonSpacingSniff;
use _PhpScoperff1e514762b4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::LINE_ENDING, "\r\n");
    $services = $containerConfigurator->services();
    $services->set(SemicolonSpacingSniff::class);
};
