<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator;

use _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Alias;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AliasConfigurator extends \_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\AbstractServiceConfigurator
{
    const FACTORY = 'alias';
    use Traits\DeprecateTrait;
    use Traits\PublicTrait;
    public function __construct(\_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\ServicesConfigurator $parent, \_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Alias $alias)
    {
        $this->parent = $parent;
        $this->definition = $alias;
    }
}
