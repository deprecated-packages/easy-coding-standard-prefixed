<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\Traits;

use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Argument\BoundArgument;
use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\DefaultsConfigurator;
use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\InstanceofConfigurator;
use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Reference;
trait BindTrait
{
    /**
     * Sets bindings.
     *
     * Bindings map $named or FQCN arguments to values that should be
     * injected in the matching parameters (of the constructor, of methods
     * called and of controller actions).
     *
     * @param string $nameOrFqcn A parameter name with its "$" prefix, or a FQCN
     * @param mixed  $valueOrRef The value or reference to bind
     *
     * @return $this
     */
    public final function bind(string $nameOrFqcn, $valueOrRef) : self
    {
        $valueOrRef = static::processValue($valueOrRef, \true);
        if (!\preg_match('/^(?:(?:array|bool|float|int|string)[ \\t]*+)?\\$/', $nameOrFqcn) && !$valueOrRef instanceof \_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Reference) {
            throw new \_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Invalid binding for service "%s": named arguments must start with a "$", and FQCN must map to references. Neither applies to binding "%s".', $this->id, $nameOrFqcn));
        }
        $bindings = $this->definition->getBindings();
        $type = $this instanceof \_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\DefaultsConfigurator ? \_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Argument\BoundArgument::DEFAULTS_BINDING : ($this instanceof \_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\InstanceofConfigurator ? \_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Argument\BoundArgument::INSTANCEOF_BINDING : \_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Argument\BoundArgument::SERVICE_BINDING);
        $bindings[$nameOrFqcn] = new \_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Argument\BoundArgument($valueOrRef, \true, $type, $this->path ?? null);
        $this->definition->setBindings($bindings);
        return $this;
    }
}
