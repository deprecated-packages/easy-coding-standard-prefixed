<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall;
final class DeprecatedServiceOptionKeyYamlToPhpFactory implements \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall
    {
        // the old, simple format
        if (!\is_array($yaml)) {
            $args = $this->argsNodeFactory->createFromValues([$yaml]);
        } else {
            $items = [$yaml['package'] ?? '', $yaml['version'] ?? '', $yaml['message'] ?? ''];
            $args = $this->argsNodeFactory->createFromValues($items);
        }
        return new \_PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall($methodCall, 'deprecate', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::DEPRECATED;
    }
}
