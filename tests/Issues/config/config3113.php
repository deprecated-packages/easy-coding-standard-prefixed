<?php

declare (strict_types=1);
namespace _PhpScoper08fb1f8a2f44;

use _PhpScoper08fb1f8a2f44\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(SetList::ARRAY);
};
