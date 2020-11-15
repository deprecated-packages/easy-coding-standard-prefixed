<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79;

use _PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\Skipper\Tests\Skipper\Only\Source\IncludeThisClass;
use Symplify\Skipper\ValueObject\Option;
return static function (\_PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\Skipper\ValueObject\Option::ONLY, [\Symplify\Skipper\Tests\Skipper\Only\Source\IncludeThisClass::class => ['SomeFileToOnlyInclude.php']]);
};
