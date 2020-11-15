<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5;

use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\Skipper\Tests\Skipper\Skip\Source\AnotherClassToSkip;
use Symplify\Skipper\Tests\Skipper\Skip\Source\SomeClassToSkip;
use Symplify\Skipper\ValueObject\Option;
return static function (\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\Skipper\ValueObject\Option::SKIP, [
        // classes
        \Symplify\Skipper\Tests\Skipper\Skip\Source\SomeClassToSkip::class,
        \Symplify\Skipper\Tests\Skipper\Skip\Source\AnotherClassToSkip::class => ['Fixture/someFile', '*/someDirectory/*'],
        // code
        \Symplify\Skipper\Tests\Skipper\Skip\Source\AnotherClassToSkip::class . '.someCode' => null,
        \Symplify\Skipper\Tests\Skipper\Skip\Source\AnotherClassToSkip::class . '.someOtherCode' => ['*/someDirectory/*'],
        \Symplify\Skipper\Tests\Skipper\Skip\Source\AnotherClassToSkip::class . '.someAnotherCode' => ['someDirectory/*'],
        // messages
        'some fishy code at line 5!' => null,
        'some another fishy code at line 5!' => ['someDirectory/*'],
        'Cognitive complexity for method "foo" is 2 but has to be less than or equal to 1.' => null,
    ]);
};
