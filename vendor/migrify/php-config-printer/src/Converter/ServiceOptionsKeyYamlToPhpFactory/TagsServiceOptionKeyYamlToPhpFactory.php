<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Converter\ServiceOptionsKeyYamlToPhpFactory;

use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperecb978830f1e\PhpParser\BuilderHelpers;
use _PhpScoperecb978830f1e\PhpParser\Node\Arg;
use _PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall;
use _PhpScoperecb978830f1e\PhpParser\Node\Scalar\String_;
final class TagsServiceOptionKeyYamlToPhpFactory implements \_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var string
     */
    private const TAG = 'tag';
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall
    {
        /** @var mixed[] $yaml */
        if (\count($yaml) === 1 && \is_string($yaml[0])) {
            $string = new \_PhpScoperecb978830f1e\PhpParser\Node\Scalar\String_($yaml[0]);
            return new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, [new \_PhpScoperecb978830f1e\PhpParser\Node\Arg($string)]);
        }
        foreach ($yaml as $singleValue) {
            $args = [];
            foreach ($singleValue as $singleNestedKey => $singleNestedValue) {
                if ($singleNestedKey === 'name') {
                    $args[] = new \_PhpScoperecb978830f1e\PhpParser\Node\Arg(\_PhpScoperecb978830f1e\PhpParser\BuilderHelpers::normalizeValue($singleNestedValue));
                    unset($singleValue[$singleNestedKey]);
                }
            }
            $restArgs = $this->argsNodeFactory->createFromValuesAndWrapInArray($singleValue);
            $args = \array_merge($args, $restArgs);
            $methodCall = new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, $args);
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::TAGS;
    }
}
