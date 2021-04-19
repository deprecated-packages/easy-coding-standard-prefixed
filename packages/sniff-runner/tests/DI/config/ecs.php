<?php

declare (strict_types=1);
namespace _PhpScoper855b7fb41c61;

use _PhpScoper855b7fb41c61\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\SniffRunner\Tests\DI\Source\AnotherSniff;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(AnotherSniff::class)->property('lineLimit', 15)->property('absoluteLineLimit', [
        // just test array of annotations
        '@author',
    ]);
};
