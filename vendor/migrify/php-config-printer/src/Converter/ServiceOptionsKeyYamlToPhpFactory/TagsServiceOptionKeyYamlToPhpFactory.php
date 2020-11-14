<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Converter\ServiceOptionsKeyYamlToPhpFactory;

use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperddde3ba4aebc\PhpParser\BuilderHelpers;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Arg;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Scalar\String_;
final class TagsServiceOptionKeyYamlToPhpFactory implements \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var string
     */
    private const TAG = 'tag';
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall
    {
        /** @var mixed[] $yaml */
        if (\count($yaml) === 1 && \is_string($yaml[0])) {
            $string = new \_PhpScoperddde3ba4aebc\PhpParser\Node\Scalar\String_($yaml[0]);
            return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, [new \_PhpScoperddde3ba4aebc\PhpParser\Node\Arg($string)]);
        }
        foreach ($yaml as $singleValue) {
            $args = [];
            foreach ($singleValue as $singleNestedKey => $singleNestedValue) {
                if ($singleNestedKey === 'name') {
                    $args[] = new \_PhpScoperddde3ba4aebc\PhpParser\Node\Arg(\_PhpScoperddde3ba4aebc\PhpParser\BuilderHelpers::normalizeValue($singleNestedValue));
                    unset($singleValue[$singleNestedKey]);
                }
            }
            $restArgs = $this->argsNodeFactory->createFromValuesAndWrapInArray($singleValue);
            $args = \array_merge($args, $restArgs);
            $methodCall = new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, $args);
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::TAGS;
    }
}
