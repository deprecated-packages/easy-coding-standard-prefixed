<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Converter\ServiceOptionsKeyYamlToPhpFactory;

use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScopera4be459e5e3d\PhpParser\BuilderHelpers;
use _PhpScopera4be459e5e3d\PhpParser\Node\Arg;
use _PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall;
use _PhpScopera4be459e5e3d\PhpParser\Node\Scalar\String_;
final class TagsServiceOptionKeyYamlToPhpFactory implements \_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var string
     */
    private const TAG = 'tag';
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall
    {
        /** @var mixed[] $yaml */
        if (\count($yaml) === 1 && \is_string($yaml[0])) {
            $string = new \_PhpScopera4be459e5e3d\PhpParser\Node\Scalar\String_($yaml[0]);
            return new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, [new \_PhpScopera4be459e5e3d\PhpParser\Node\Arg($string)]);
        }
        foreach ($yaml as $singleValue) {
            $args = [];
            foreach ($singleValue as $singleNestedKey => $singleNestedValue) {
                if ($singleNestedKey === 'name') {
                    $args[] = new \_PhpScopera4be459e5e3d\PhpParser\Node\Arg(\_PhpScopera4be459e5e3d\PhpParser\BuilderHelpers::normalizeValue($singleNestedValue));
                    unset($singleValue[$singleNestedKey]);
                }
            }
            $restArgs = $this->argsNodeFactory->createFromValuesAndWrapInArray($singleValue);
            $args = \array_merge($args, $restArgs);
            $methodCall = new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, $args);
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::TAGS;
    }
}
