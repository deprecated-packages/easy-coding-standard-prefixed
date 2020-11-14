<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoperddde3ba4aebc\Symfony\Component\Config\Definition\BaseNode;
use _PhpScoperddde3ba4aebc\Symfony\Component\Config\Definition\Exception\TreeWithoutRootNodeException;
use _PhpScoperddde3ba4aebc\Symfony\Component\Config\Definition\Processor;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Extension\ConfigurationExtensionInterface;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ParameterBag\EnvPlaceholderParameterBag;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
/**
 * Validates environment variable placeholders used in extension configuration with dummy values.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class ValidateEnvPlaceholdersPass implements \_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    private static $typeFixtures = ['array' => [], 'bool' => \false, 'float' => 0.0, 'int' => 0, 'string' => ''];
    private $extensionConfig = [];
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $this->extensionConfig = [];
        if (!\class_exists(\_PhpScoperddde3ba4aebc\Symfony\Component\Config\Definition\BaseNode::class) || !($extensions = $container->getExtensions())) {
            return;
        }
        $resolvingBag = $container->getParameterBag();
        if (!$resolvingBag instanceof \_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ParameterBag\EnvPlaceholderParameterBag) {
            return;
        }
        $defaultBag = new \_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ParameterBag\ParameterBag($resolvingBag->all());
        $envTypes = $resolvingBag->getProvidedTypes();
        try {
            foreach ($resolvingBag->getEnvPlaceholders() + $resolvingBag->getUnusedEnvPlaceholders() as $env => $placeholders) {
                $values = [];
                if (\false === ($i = \strpos($env, ':'))) {
                    $default = $defaultBag->has("env({$env})") ? $defaultBag->get("env({$env})") : self::$typeFixtures['string'];
                    $defaultType = null !== $default ? self::getType($default) : 'string';
                    $values[$defaultType] = $default;
                } else {
                    $prefix = \substr($env, 0, $i);
                    foreach ($envTypes[$prefix] ?? ['string'] as $type) {
                        $values[$type] = self::$typeFixtures[$type] ?? null;
                    }
                }
                foreach ($placeholders as $placeholder) {
                    \_PhpScoperddde3ba4aebc\Symfony\Component\Config\Definition\BaseNode::setPlaceholder($placeholder, $values);
                }
            }
            $processor = new \_PhpScoperddde3ba4aebc\Symfony\Component\Config\Definition\Processor();
            foreach ($extensions as $name => $extension) {
                if (!$extension instanceof \_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Extension\ConfigurationExtensionInterface || !($config = \array_filter($container->getExtensionConfig($name)))) {
                    // this extension has no semantic configuration or was not called
                    continue;
                }
                $config = $resolvingBag->resolveValue($config);
                if (null === ($configuration = $extension->getConfiguration($config, $container))) {
                    continue;
                }
                try {
                    $this->extensionConfig[$name] = $processor->processConfiguration($configuration, $config);
                } catch (\_PhpScoperddde3ba4aebc\Symfony\Component\Config\Definition\Exception\TreeWithoutRootNodeException $e) {
                }
            }
        } finally {
            \_PhpScoperddde3ba4aebc\Symfony\Component\Config\Definition\BaseNode::resetPlaceholders();
        }
        $resolvingBag->clearUnusedEnvPlaceholders();
    }
    /**
     * @internal
     */
    public function getExtensionConfig() : array
    {
        try {
            return $this->extensionConfig;
        } finally {
            $this->extensionConfig = [];
        }
    }
    private static function getType($value) : string
    {
        switch ($type = \gettype($value)) {
            case 'boolean':
                return 'bool';
            case 'double':
                return 'float';
            case 'integer':
                return 'int';
        }
        return $type;
    }
}
