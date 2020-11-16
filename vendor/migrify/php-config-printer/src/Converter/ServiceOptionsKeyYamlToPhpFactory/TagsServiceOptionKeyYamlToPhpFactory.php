<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Converter\ServiceOptionsKeyYamlToPhpFactory;

use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperedc2e0c967db\PhpParser\BuilderHelpers;
use _PhpScoperedc2e0c967db\PhpParser\Node\Arg;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall;
use _PhpScoperedc2e0c967db\PhpParser\Node\Scalar\String_;
final class TagsServiceOptionKeyYamlToPhpFactory implements \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var string
     */
    private const TAG = 'tag';
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall
    {
        /** @var mixed[] $yaml */
        if (\count($yaml) === 1 && \is_string($yaml[0])) {
            $string = new \_PhpScoperedc2e0c967db\PhpParser\Node\Scalar\String_($yaml[0]);
            return new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, [new \_PhpScoperedc2e0c967db\PhpParser\Node\Arg($string)]);
        }
        foreach ($yaml as $singleValue) {
            $args = [];
            foreach ($singleValue as $singleNestedKey => $singleNestedValue) {
                if ($singleNestedKey === 'name') {
                    $args[] = new \_PhpScoperedc2e0c967db\PhpParser\Node\Arg(\_PhpScoperedc2e0c967db\PhpParser\BuilderHelpers::normalizeValue($singleNestedValue));
                    unset($singleValue[$singleNestedKey]);
                }
            }
            $restArgs = $this->argsNodeFactory->createFromValuesAndWrapInArray($singleValue);
            $args = \array_merge($args, $restArgs);
            $methodCall = new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, $args);
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::TAGS;
    }
}
