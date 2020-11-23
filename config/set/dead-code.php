<?php

declare (strict_types=1);
namespace _PhpScopere341acab57d4;

use SlevomatCodingStandard\Sniffs\Classes\UnusedPrivateElementsSniff;
use SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff;
use SlevomatCodingStandard\Sniffs\Functions\UnusedParameterSniff;
use SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff;
use _PhpScopere341acab57d4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (\_PhpScopere341acab57d4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\UnusedPrivateElementsSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Functions\UnusedParameterSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::SKIP, [\SlevomatCodingStandard\Sniffs\Functions\UnusedParameterSniff::class . '.UnusedParameter' => null]);
};
