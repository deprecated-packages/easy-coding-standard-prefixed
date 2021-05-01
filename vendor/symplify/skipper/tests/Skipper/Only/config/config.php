<?php

declare (strict_types=1);
namespace _PhpScoper3c44535fe75f;

use _PhpScoper3c44535fe75f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\Skipper\Tests\Skipper\Only\Source\IncludeThisClass;
use Symplify\Skipper\Tests\Skipper\Only\Source\SkipCompletely;
use Symplify\Skipper\Tests\Skipper\Only\Source\SkipCompletelyToo;
use Symplify\Skipper\ValueObject\Option;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::ONLY, [
        IncludeThisClass::class => ['SomeFileToOnlyInclude.php'],
        // these 2 lines should be identical
        SkipCompletely::class => null,
        SkipCompletelyToo::class,
    ]);
};
