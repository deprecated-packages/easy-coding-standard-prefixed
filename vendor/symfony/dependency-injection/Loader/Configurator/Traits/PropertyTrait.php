<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper83b3b9a317c0\Symfony\Component\DependencyInjection\Loader\Configurator\Traits;

trait PropertyTrait
{
    /**
     * Sets a specific property.
     *
     * @return $this
     */
    public final function property(string $name, $value) : self
    {
        $this->definition->setProperty($name, static::processValue($value, \true));
        return $this;
    }
}
