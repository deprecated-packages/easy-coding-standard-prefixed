<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator;

use _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Definition;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class InlineServiceConfigurator extends \_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\AbstractConfigurator
{
    const FACTORY = 'inline';
    use Traits\ArgumentTrait;
    use Traits\AutowireTrait;
    use Traits\BindTrait;
    use Traits\FactoryTrait;
    use Traits\FileTrait;
    use Traits\LazyTrait;
    use Traits\ParentTrait;
    use Traits\TagTrait;
    public function __construct(\_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Definition $definition)
    {
        $this->definition = $definition;
    }
}
