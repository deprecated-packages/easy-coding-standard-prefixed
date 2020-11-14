<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera749ac204cd2\Symfony\Component\Debug\FatalErrorHandler;

use _PhpScopera749ac204cd2\Composer\Autoload\ClassLoader as ComposerClassLoader;
use _PhpScopera749ac204cd2\Symfony\Component\ClassLoader\ClassLoader as SymfonyClassLoader;
use _PhpScopera749ac204cd2\Symfony\Component\Debug\DebugClassLoader;
use _PhpScopera749ac204cd2\Symfony\Component\Debug\Exception\ClassNotFoundException;
use _PhpScopera749ac204cd2\Symfony\Component\Debug\Exception\FatalErrorException;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.4, use "%s" instead.', \_PhpScopera749ac204cd2\Symfony\Component\Debug\FatalErrorHandler\ClassNotFoundFatalErrorHandler::class, \_PhpScopera749ac204cd2\Symfony\Component\ErrorHandler\FatalErrorHandler\ClassNotFoundFatalErrorHandler::class), \E_USER_DEPRECATED);
/**
 * ErrorHandler for classes that do not exist.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.4, use Symfony\Component\ErrorHandler\FatalErrorHandler\ClassNotFoundFatalErrorHandler instead.
 */
class ClassNotFoundFatalErrorHandler implements \_PhpScopera749ac204cd2\Symfony\Component\Debug\FatalErrorHandler\FatalErrorHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handleError(array $error, \_PhpScopera749ac204cd2\Symfony\Component\Debug\Exception\FatalErrorException $exception)
    {
        $messageLen = \strlen($error['message']);
        $notFoundSuffix = '\' not found';
        $notFoundSuffixLen = \strlen($notFoundSuffix);
        if ($notFoundSuffixLen > $messageLen) {
            return null;
        }
        if (0 !== \substr_compare($error['message'], $notFoundSuffix, -$notFoundSuffixLen)) {
            return null;
        }
        foreach (['class', 'interface', 'trait'] as $typeName) {
            $prefix = \ucfirst($typeName) . ' \'';
            $prefixLen = \strlen($prefix);
            if (0 !== \strpos($error['message'], $prefix)) {
                continue;
            }
            $fullyQualifiedClassName = \substr($error['message'], $prefixLen, -$notFoundSuffixLen);
            if (\false !== ($namespaceSeparatorIndex = \strrpos($fullyQualifiedClassName, '\\'))) {
                $className = \substr($fullyQualifiedClassName, $namespaceSeparatorIndex + 1);
                $namespacePrefix = \substr($fullyQualifiedClassName, 0, $namespaceSeparatorIndex);
                $message = \sprintf('Attempted to load %s "%s" from namespace "%s".', $typeName, $className, $namespacePrefix);
                $tail = ' for another namespace?';
            } else {
                $className = $fullyQualifiedClassName;
                $message = \sprintf('Attempted to load %s "%s" from the global namespace.', $typeName, $className);
                $tail = '?';
            }
            if ($candidates = $this->getClassCandidates($className)) {
                $tail = \array_pop($candidates) . '"?';
                if ($candidates) {
                    $tail = ' for e.g. "' . \implode('", "', $candidates) . '" or "' . $tail;
                } else {
                    $tail = ' for "' . $tail;
                }
            }
            $message .= "\nDid you forget a \"use\" statement" . $tail;
            return new \_PhpScopera749ac204cd2\Symfony\Component\Debug\Exception\ClassNotFoundException($message, $exception);
        }
        return null;
    }
    /**
     * Tries to guess the full namespace for a given class name.
     *
     * By default, it looks for PSR-0 and PSR-4 classes registered via a Symfony or a Composer
     * autoloader (that should cover all common cases).
     *
     * @param string $class A class name (without its namespace)
     *
     * @return array An array of possible fully qualified class names
     */
    private function getClassCandidates(string $class) : array
    {
        if (!\is_array($functions = \spl_autoload_functions())) {
            return [];
        }
        // find Symfony and Composer autoloaders
        $classes = [];
        foreach ($functions as $function) {
            if (!\is_array($function)) {
                continue;
            }
            // get class loaders wrapped by DebugClassLoader
            if ($function[0] instanceof \_PhpScopera749ac204cd2\Symfony\Component\Debug\DebugClassLoader) {
                $function = $function[0]->getClassLoader();
                if (!\is_array($function)) {
                    continue;
                }
            }
            if ($function[0] instanceof \_PhpScopera749ac204cd2\Composer\Autoload\ClassLoader || $function[0] instanceof \_PhpScopera749ac204cd2\Symfony\Component\ClassLoader\ClassLoader) {
                foreach ($function[0]->getPrefixes() as $prefix => $paths) {
                    foreach ($paths as $path) {
                        $classes = \array_merge($classes, $this->findClassInPath($path, $class, $prefix));
                    }
                }
            }
            if ($function[0] instanceof \_PhpScopera749ac204cd2\Composer\Autoload\ClassLoader) {
                foreach ($function[0]->getPrefixesPsr4() as $prefix => $paths) {
                    foreach ($paths as $path) {
                        $classes = \array_merge($classes, $this->findClassInPath($path, $class, $prefix));
                    }
                }
            }
        }
        return \array_unique($classes);
    }
    private function findClassInPath(string $path, string $class, string $prefix) : array
    {
        if (!($path = \realpath($path . '/' . \strtr($prefix, '\\_', '//')) ?: \realpath($path . '/' . \dirname(\strtr($prefix, '\\_', '//'))) ?: \realpath($path))) {
            return [];
        }
        $classes = [];
        $filename = $class . '.php';
        foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path, \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::LEAVES_ONLY) as $file) {
            if ($filename == $file->getFileName() && ($class = $this->convertFileToClass($path, $file->getPathName(), $prefix))) {
                $classes[] = $class;
            }
        }
        return $classes;
    }
    private function convertFileToClass(string $path, string $file, string $prefix) : ?string
    {
        $candidates = [
            // namespaced class
            $namespacedClass = \str_replace([$path . \DIRECTORY_SEPARATOR, '.php', '/'], ['', '', '\\'], $file),
            // namespaced class (with target dir)
            $prefix . $namespacedClass,
            // namespaced class (with target dir and separator)
            $prefix . '\\' . $namespacedClass,
            // PEAR class
            \str_replace('\\', '_', $namespacedClass),
            // PEAR class (with target dir)
            \str_replace('\\', '_', $prefix . $namespacedClass),
            // PEAR class (with target dir and separator)
            \str_replace('\\', '_', $prefix . '\\' . $namespacedClass),
        ];
        if ($prefix) {
            $candidates = \array_filter($candidates, function ($candidate) use($prefix) {
                return 0 === \strpos($candidate, $prefix);
            });
        }
        // We cannot use the autoloader here as most of them use require; but if the class
        // is not found, the new autoloader call will require the file again leading to a
        // "cannot redeclare class" error.
        foreach ($candidates as $candidate) {
            if ($this->classExists($candidate)) {
                return $candidate;
            }
        }
        try {
            require_once $file;
        } catch (\Throwable $e) {
            return null;
        }
        foreach ($candidates as $candidate) {
            if ($this->classExists($candidate)) {
                return $candidate;
            }
        }
        return null;
    }
    private function classExists(string $class) : bool
    {
        return \class_exists($class, \false) || \interface_exists($class, \false) || \trait_exists($class, \false);
    }
}
