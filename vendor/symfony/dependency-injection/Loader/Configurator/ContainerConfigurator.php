<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator;

use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Argument\IteratorArgument;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Argument\ServiceLocatorArgument;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Definition;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use _PhpScoperedc2e0c967db\Symfony\Component\ExpressionLanguage\Expression;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ContainerConfigurator extends \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\AbstractConfigurator
{
    const FACTORY = 'container';
    private $container;
    private $loader;
    private $instanceof;
    private $path;
    private $file;
    private $anonymousCount = 0;
    public function __construct(\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder $container, \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\PhpFileLoader $loader, array &$instanceof, string $path, string $file)
    {
        $this->container = $container;
        $this->loader = $loader;
        $this->instanceof =& $instanceof;
        $this->path = $path;
        $this->file = $file;
    }
    public final function extension(string $namespace, array $config)
    {
        if (!$this->container->hasExtension($namespace)) {
            $extensions = \array_filter(\array_map(function (\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Extension\ExtensionInterface $ext) {
                return $ext->getAlias();
            }, $this->container->getExtensions()));
            throw new \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('There is no extension able to load the configuration for "%s" (in %s). Looked for namespace "%s", found %s', $namespace, $this->file, $namespace, $extensions ? \sprintf('"%s"', \implode('", "', $extensions)) : 'none'));
        }
        $this->container->loadFromExtension($namespace, static::processValue($config));
    }
    public final function import(string $resource, string $type = null, $ignoreErrors = \false)
    {
        $this->loader->setCurrentDir(\dirname($this->path));
        $this->loader->import($resource, $type, $ignoreErrors, $this->file);
    }
    public final function parameters() : \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ParametersConfigurator
    {
        return new \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ParametersConfigurator($this->container);
    }
    public final function services() : \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ServicesConfigurator
    {
        return new \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ServicesConfigurator($this->container, $this->loader, $this->instanceof, $this->path, $this->anonymousCount);
    }
}
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
\class_alias('_PhpScoperedc2e0c967db\\Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator', 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator', \false);
/**
 * Creates a service reference.
 */
function ref(string $id) : \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ReferenceConfigurator
{
    return new \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ReferenceConfigurator($id);
}
/**
 * Creates an inline service.
 */
function inline(string $class = null) : \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\InlineServiceConfigurator
{
    return new \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\InlineServiceConfigurator(new \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Definition($class));
}
/**
 * Creates a service locator.
 *
 * @param ReferenceConfigurator[] $values
 */
function service_locator(array $values) : \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Argument\ServiceLocatorArgument
{
    return new \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Argument\ServiceLocatorArgument(\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\AbstractConfigurator::processValue($values, \true));
}
/**
 * Creates a lazy iterator.
 *
 * @param ReferenceConfigurator[] $values
 */
function iterator(array $values) : \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Argument\IteratorArgument
{
    return new \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Argument\IteratorArgument(\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\AbstractConfigurator::processValue($values, \true));
}
/**
 * Creates a lazy iterator by tag name.
 *
 * @deprecated since Symfony 4.4, to be removed in 5.0, use "tagged_iterator" instead.
 */
function tagged(string $tag, string $indexAttribute = null, string $defaultIndexMethod = null) : \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument
{
    @\trigger_error(__NAMESPACE__ . '\\tagged() is deprecated since Symfony 4.4 and will be removed in 5.0, use ' . __NAMESPACE__ . '\\tagged_iterator() instead.', \E_USER_DEPRECATED);
    return new \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument($tag, $indexAttribute, $defaultIndexMethod);
}
/**
 * Creates a lazy iterator by tag name.
 */
function tagged_iterator(string $tag, string $indexAttribute = null, string $defaultIndexMethod = null, string $defaultPriorityMethod = null) : \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument
{
    return new \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument($tag, $indexAttribute, $defaultIndexMethod, \false, $defaultPriorityMethod);
}
/**
 * Creates a service locator by tag name.
 */
function tagged_locator(string $tag, string $indexAttribute = null, string $defaultIndexMethod = null) : \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Argument\ServiceLocatorArgument
{
    return new \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Argument\ServiceLocatorArgument(new \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument($tag, $indexAttribute, $defaultIndexMethod, \true));
}
/**
 * Creates an expression.
 */
function expr(string $expression) : \_PhpScoperedc2e0c967db\Symfony\Component\ExpressionLanguage\Expression
{
    return new \_PhpScoperedc2e0c967db\Symfony\Component\ExpressionLanguage\Expression($expression);
}
