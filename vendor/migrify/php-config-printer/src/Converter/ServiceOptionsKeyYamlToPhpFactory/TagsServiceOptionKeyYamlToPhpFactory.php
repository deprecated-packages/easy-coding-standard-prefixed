<?php

declare (strict_types=1);
namespace _PhpScoper2a8ad010dfbd\Migrify\PhpConfigPrinter\Converter\ServiceOptionsKeyYamlToPhpFactory;

use _PhpScoper2a8ad010dfbd\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper2a8ad010dfbd\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper2a8ad010dfbd\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoper2a8ad010dfbd\PhpParser\BuilderHelpers;
use _PhpScoper2a8ad010dfbd\PhpParser\Node\Arg;
use _PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\MethodCall;
use _PhpScoper2a8ad010dfbd\PhpParser\Node\Scalar\String_;
final class TagsServiceOptionKeyYamlToPhpFactory implements \_PhpScoper2a8ad010dfbd\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var string
     */
    private const TAG = 'tag';
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoper2a8ad010dfbd\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\MethodCall
    {
        /** @var mixed[] $yaml */
        if (\count($yaml) === 1 && \is_string($yaml[0])) {
            $string = new \_PhpScoper2a8ad010dfbd\PhpParser\Node\Scalar\String_($yaml[0]);
            return new \_PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, [new \_PhpScoper2a8ad010dfbd\PhpParser\Node\Arg($string)]);
        }
        foreach ($yaml as $singleValue) {
            $args = [];
            foreach ($singleValue as $singleNestedKey => $singleNestedValue) {
                if ($singleNestedKey === 'name') {
                    $args[] = new \_PhpScoper2a8ad010dfbd\PhpParser\Node\Arg(\_PhpScoper2a8ad010dfbd\PhpParser\BuilderHelpers::normalizeValue($singleNestedValue));
                    unset($singleValue[$singleNestedKey]);
                }
            }
            $restArgs = $this->argsNodeFactory->createFromValuesAndWrapInArray($singleValue);
            $args = \array_merge($args, $restArgs);
            $methodCall = new \_PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, $args);
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoper2a8ad010dfbd\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::TAGS;
    }
}
