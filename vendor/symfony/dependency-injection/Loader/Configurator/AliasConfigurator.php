<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator;

use _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Alias;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AliasConfigurator extends \_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\AbstractServiceConfigurator
{
    const FACTORY = 'alias';
    use Traits\DeprecateTrait;
    use Traits\PublicTrait;
    public function __construct(\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ServicesConfigurator $parent, \_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Alias $alias)
    {
        $this->parent = $parent;
        $this->definition = $alias;
    }
}
