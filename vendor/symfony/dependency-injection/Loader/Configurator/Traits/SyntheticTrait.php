<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper578a67c80b2b\Symfony\Component\DependencyInjection\Loader\Configurator\Traits;

trait SyntheticTrait
{
    /**
     * Sets whether this definition is synthetic, that is not constructed by the
     * container, but dynamically injected.
     *
     * @return $this
     */
    public final function synthetic(bool $synthetic = \true) : self
    {
        $this->definition->setSynthetic($synthetic);
        return $this;
    }
}
