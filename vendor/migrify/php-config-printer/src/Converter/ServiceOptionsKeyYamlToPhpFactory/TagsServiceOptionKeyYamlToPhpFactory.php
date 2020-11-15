<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\Converter\ServiceOptionsKeyYamlToPhpFactory;

use _PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoper64a921a5401b\PhpParser\BuilderHelpers;
use _PhpScoper64a921a5401b\PhpParser\Node\Arg;
use _PhpScoper64a921a5401b\PhpParser\Node\Expr\MethodCall;
use _PhpScoper64a921a5401b\PhpParser\Node\Scalar\String_;
final class TagsServiceOptionKeyYamlToPhpFactory implements \_PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var string
     */
    private const TAG = 'tag';
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper64a921a5401b\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper64a921a5401b\PhpParser\Node\Expr\MethodCall
    {
        /** @var mixed[] $yaml */
        if (\count($yaml) === 1 && \is_string($yaml[0])) {
            $string = new \_PhpScoper64a921a5401b\PhpParser\Node\Scalar\String_($yaml[0]);
            return new \_PhpScoper64a921a5401b\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, [new \_PhpScoper64a921a5401b\PhpParser\Node\Arg($string)]);
        }
        foreach ($yaml as $singleValue) {
            $args = [];
            foreach ($singleValue as $singleNestedKey => $singleNestedValue) {
                if ($singleNestedKey === 'name') {
                    $args[] = new \_PhpScoper64a921a5401b\PhpParser\Node\Arg(\_PhpScoper64a921a5401b\PhpParser\BuilderHelpers::normalizeValue($singleNestedValue));
                    unset($singleValue[$singleNestedKey]);
                }
            }
            $restArgs = $this->argsNodeFactory->createFromValuesAndWrapInArray($singleValue);
            $args = \array_merge($args, $restArgs);
            $methodCall = new \_PhpScoper64a921a5401b\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, $args);
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::TAGS;
    }
}
