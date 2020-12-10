<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Loader\Configurator\Traits;

use _PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
trait TagTrait
{
    /**
     * Adds a tag for this definition.
     *
     * @return $this
     */
    public final function tag(string $name, array $attributes = []) : self
    {
        if ('' === $name) {
            throw new \_PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('The tag name for service "%s" must be a non-empty string.', $this->id));
        }
        foreach ($attributes as $attribute => $value) {
            if (!\is_scalar($value) && null !== $value) {
                throw new \_PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('A tag attribute must be of a scalar-type for service "%s", tag "%s", attribute "%s".', $this->id, $name, $attribute));
            }
        }
        $this->definition->addTag($name, $attributes);
        return $this;
    }
}
