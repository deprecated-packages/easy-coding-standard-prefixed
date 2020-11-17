<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Converter\ServiceOptionsKeyYamlToPhpFactory;

use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperad4b7e2c09d8\PhpParser\BuilderHelpers;
use _PhpScoperad4b7e2c09d8\PhpParser\Node\Arg;
use _PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall;
use _PhpScoperad4b7e2c09d8\PhpParser\Node\Scalar\String_;
final class TagsServiceOptionKeyYamlToPhpFactory implements \_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var string
     */
    private const TAG = 'tag';
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall
    {
        /** @var mixed[] $yaml */
        if (\count($yaml) === 1 && \is_string($yaml[0])) {
            $string = new \_PhpScoperad4b7e2c09d8\PhpParser\Node\Scalar\String_($yaml[0]);
            return new \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, [new \_PhpScoperad4b7e2c09d8\PhpParser\Node\Arg($string)]);
        }
        foreach ($yaml as $singleValue) {
            $args = [];
            foreach ($singleValue as $singleNestedKey => $singleNestedValue) {
                if ($singleNestedKey === 'name') {
                    $args[] = new \_PhpScoperad4b7e2c09d8\PhpParser\Node\Arg(\_PhpScoperad4b7e2c09d8\PhpParser\BuilderHelpers::normalizeValue($singleNestedValue));
                    unset($singleValue[$singleNestedKey]);
                }
            }
            $restArgs = $this->argsNodeFactory->createFromValuesAndWrapInArray($singleValue);
            $args = \array_merge($args, $restArgs);
            $methodCall = new \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, $args);
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::TAGS;
    }
}
