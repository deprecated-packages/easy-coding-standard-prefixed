<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc7a2896cc805\Symfony\Component\DependencyInjection\Loader\Configurator;

use _PhpScoperc7a2896cc805\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ParametersConfigurator extends \_PhpScoperc7a2896cc805\Symfony\Component\DependencyInjection\Loader\Configurator\AbstractConfigurator
{
    public const FACTORY = 'parameters';
    private $container;
    public function __construct(ContainerBuilder $container)
    {
        $this->container = $container;
    }
    /**
     * Creates a parameter.
     *
     * @return $this
     */
    public final function set(string $name, $value) : self
    {
        $this->container->setParameter($name, static::processValue($value, \true));
        return $this;
    }
    /**
     * Creates a parameter.
     *
     * @return $this
     */
    public final function __invoke(string $name, $value) : self
    {
        return $this->set($name, $value);
    }
}
