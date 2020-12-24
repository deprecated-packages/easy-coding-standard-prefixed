<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab;

use SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff;
use SlevomatCodingStandard\Sniffs\Functions\UnusedParameterSniff;
use SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff;
use _PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (\_PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Functions\UnusedParameterSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::SKIP, [\SlevomatCodingStandard\Sniffs\Functions\UnusedParameterSniff::class . '.UnusedParameter' => null]);
};
