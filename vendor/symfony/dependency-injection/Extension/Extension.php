<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper133be48300f9\Symfony\Component\DependencyInjection\Extension;

use _PhpScoper133be48300f9\Symfony\Component\Config\Definition\ConfigurationInterface;
use _PhpScoper133be48300f9\Symfony\Component\Config\Definition\Processor;
use _PhpScoper133be48300f9\Symfony\Component\DependencyInjection\Container;
use _PhpScoper133be48300f9\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper133be48300f9\Symfony\Component\DependencyInjection\Exception\BadMethodCallException;
use _PhpScoper133be48300f9\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
/**
 * Provides useful features shared by many extensions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Extension implements \_PhpScoper133be48300f9\Symfony\Component\DependencyInjection\Extension\ExtensionInterface, \_PhpScoper133be48300f9\Symfony\Component\DependencyInjection\Extension\ConfigurationExtensionInterface
{
    private $processedConfigs = [];
    /**
     * {@inheritdoc}
     */
    public function getXsdValidationBasePath()
    {
        return \false;
    }
    /**
     * {@inheritdoc}
     */
    public function getNamespace()
    {
        return 'http://example.org/schema/dic/' . $this->getAlias();
    }
    /**
     * Returns the recommended alias to use in XML.
     *
     * This alias is also the mandatory prefix to use when using YAML.
     *
     * This convention is to remove the "Extension" postfix from the class
     * name and then lowercase and underscore the result. So:
     *
     *     AcmeHelloExtension
     *
     * becomes
     *
     *     acme_hello
     *
     * This can be overridden in a sub-class to specify the alias manually.
     *
     * @return string The alias
     *
     * @throws BadMethodCallException When the extension name does not follow conventions
     */
    public function getAlias()
    {
        $className = \get_class($this);
        if ('Extension' != \substr($className, -9)) {
            throw new \_PhpScoper133be48300f9\Symfony\Component\DependencyInjection\Exception\BadMethodCallException('This extension does not follow the naming convention; you must overwrite the getAlias() method.');
        }
        $classBaseName = \substr(\strrchr($className, '\\'), 1, -9);
        return \_PhpScoper133be48300f9\Symfony\Component\DependencyInjection\Container::underscore($classBaseName);
    }
    /**
     * {@inheritdoc}
     */
    public function getConfiguration(array $config, \_PhpScoper133be48300f9\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $class = \get_class($this);
        $class = \substr_replace($class, '\\Configuration', \strrpos($class, '\\'));
        $class = $container->getReflectionClass($class);
        if (!$class) {
            return null;
        }
        if (!$class->implementsInterface(\_PhpScoper133be48300f9\Symfony\Component\Config\Definition\ConfigurationInterface::class)) {
            @\trigger_error(\sprintf('Not implementing "%s" in the extension configuration class "%s" is deprecated since Symfony 4.1.', \_PhpScoper133be48300f9\Symfony\Component\Config\Definition\ConfigurationInterface::class, $class->getName()), \E_USER_DEPRECATED);
            //throw new LogicException(sprintf('The extension configuration class "%s" must implement "%s".', $class->getName(), ConfigurationInterface::class));
            return null;
        }
        if (!($constructor = $class->getConstructor()) || !$constructor->getNumberOfRequiredParameters()) {
            return $class->newInstance();
        }
        return null;
    }
    protected final function processConfiguration(\_PhpScoper133be48300f9\Symfony\Component\Config\Definition\ConfigurationInterface $configuration, array $configs) : array
    {
        $processor = new \_PhpScoper133be48300f9\Symfony\Component\Config\Definition\Processor();
        return $this->processedConfigs[] = $processor->processConfiguration($configuration, $configs);
    }
    /**
     * @internal
     */
    public final function getProcessedConfigs() : array
    {
        try {
            return $this->processedConfigs;
        } finally {
            $this->processedConfigs = [];
        }
    }
    /**
     * @return bool Whether the configuration is enabled
     *
     * @throws InvalidArgumentException When the config is not enableable
     */
    protected function isConfigEnabled(\_PhpScoper133be48300f9\Symfony\Component\DependencyInjection\ContainerBuilder $container, array $config)
    {
        if (!\array_key_exists('enabled', $config)) {
            throw new \_PhpScoper133be48300f9\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException("The config array has no 'enabled' key.");
        }
        return (bool) $container->getParameterBag()->resolveValue($config['enabled']);
    }
}
