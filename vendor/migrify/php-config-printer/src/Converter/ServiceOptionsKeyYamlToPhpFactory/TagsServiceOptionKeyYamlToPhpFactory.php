<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Converter\ServiceOptionsKeyYamlToPhpFactory;

use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScopera189153e1f79\PhpParser\BuilderHelpers;
use _PhpScopera189153e1f79\PhpParser\Node\Arg;
use _PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall;
use _PhpScopera189153e1f79\PhpParser\Node\Scalar\String_;
final class TagsServiceOptionKeyYamlToPhpFactory implements \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var string
     */
    private const TAG = 'tag';
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall
    {
        /** @var mixed[] $yaml */
        if (\count($yaml) === 1 && \is_string($yaml[0])) {
            $string = new \_PhpScopera189153e1f79\PhpParser\Node\Scalar\String_($yaml[0]);
            return new \_PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, [new \_PhpScopera189153e1f79\PhpParser\Node\Arg($string)]);
        }
        foreach ($yaml as $singleValue) {
            $args = [];
            foreach ($singleValue as $singleNestedKey => $singleNestedValue) {
                if ($singleNestedKey === 'name') {
                    $args[] = new \_PhpScopera189153e1f79\PhpParser\Node\Arg(\_PhpScopera189153e1f79\PhpParser\BuilderHelpers::normalizeValue($singleNestedValue));
                    unset($singleValue[$singleNestedKey]);
                }
            }
            $restArgs = $this->argsNodeFactory->createFromValuesAndWrapInArray($singleValue);
            $args = \array_merge($args, $restArgs);
            $methodCall = new \_PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, $args);
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::TAGS;
    }
}
