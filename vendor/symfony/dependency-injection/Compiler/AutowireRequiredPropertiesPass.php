<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Definition;
use _PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\TypedReference;
/**
 * Looks for definitions with autowiring enabled and registers their corresponding "@required" properties.
 *
 * @author Sebastien Morel (Plopix) <morel.seb@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AutowireRequiredPropertiesPass extends \_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Compiler\AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    protected function processValue($value, bool $isRoot = \false)
    {
        if (\PHP_VERSION_ID < 70400) {
            return $value;
        }
        $value = parent::processValue($value, $isRoot);
        if (!$value instanceof \_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Definition || !$value->isAutowired() || $value->isAbstract() || !$value->getClass()) {
            return $value;
        }
        if (!($reflectionClass = $this->container->getReflectionClass($value->getClass(), \false))) {
            return $value;
        }
        $properties = $value->getProperties();
        foreach ($reflectionClass->getProperties() as $reflectionProperty) {
            if (!$reflectionProperty->hasType()) {
                continue;
            }
            if (\false === ($doc = $reflectionProperty->getDocComment())) {
                continue;
            }
            if (\false === \stripos($doc, '@required') || !\preg_match('#(?:^/\\*\\*|\\n\\s*+\\*)\\s*+@required(?:\\s|\\*/$)#i', $doc)) {
                continue;
            }
            if (\array_key_exists($name = $reflectionProperty->getName(), $properties)) {
                continue;
            }
            $type = $reflectionProperty->getType()->getName();
            $value->setProperty($name, new \_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\TypedReference($type, $type, \_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, $name));
        }
        return $value;
    }
}
