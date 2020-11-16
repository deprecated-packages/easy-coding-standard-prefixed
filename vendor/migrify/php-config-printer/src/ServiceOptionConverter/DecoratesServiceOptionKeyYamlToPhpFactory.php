<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Sorter\YamlArgumentSorter;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\ContainerInterface;
final class DecoratesServiceOptionKeyYamlToPhpFactory implements \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var string
     */
    private const DECORATION_ON_INVALID = 'decoration_on_invalid';
    /**
     * @var string
     */
    private const DECORATION_INNER_NAME = 'decoration_inner_name';
    /**
     * @var string
     */
    private const DECORATION_PRIORITY = 'decoration_priority';
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var YamlArgumentSorter
     */
    private $yamlArgumentSorter;
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Sorter\YamlArgumentSorter $yamlArgumentSorter, \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->yamlArgumentSorter = $yamlArgumentSorter;
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall
    {
        $arguments = $this->yamlArgumentSorter->sortArgumentsByKeyIfExists($values, [self::DECORATION_INNER_NAME => null, self::DECORATION_PRIORITY => 0, self::DECORATION_ON_INVALID => null]);
        if (isset($arguments[self::DECORATION_ON_INVALID])) {
            $arguments[self::DECORATION_ON_INVALID] = $arguments[self::DECORATION_ON_INVALID] === 'exception' ? $this->commonNodeFactory->createConstFetch(\_PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\ContainerInterface::class, 'EXCEPTION_ON_INVALID_REFERENCE') : $this->commonNodeFactory->createConstFetch(\_PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\ContainerInterface::class, 'IGNORE_ON_INVALID_REFERENCE');
        }
        // Don't write the next arguments if they are null.
        if ($arguments[self::DECORATION_ON_INVALID] === null && $arguments[self::DECORATION_PRIORITY] === 0) {
            unset($arguments[self::DECORATION_ON_INVALID], $arguments[self::DECORATION_PRIORITY]);
            if ($arguments[self::DECORATION_INNER_NAME] === null) {
                unset($arguments[self::DECORATION_INNER_NAME]);
            }
        }
        \array_unshift($arguments, $values['decorates']);
        $args = $this->argsNodeFactory->createFromValues($arguments);
        return new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall($methodCall, 'decorate', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::DECORATES;
    }
}
