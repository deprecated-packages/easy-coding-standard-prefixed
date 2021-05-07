<?php

declare (strict_types=1);
namespace _PhpScoper000f93dc572d;

use _PhpScoper000f93dc572d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
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
