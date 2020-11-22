<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall;
final class DeprecatedServiceOptionKeyYamlToPhpFactory implements \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall
    {
        // the old, simple format
        if (!\is_array($yaml)) {
            $args = $this->argsNodeFactory->createFromValues([$yaml]);
        } else {
            $items = [$yaml['package'] ?? '', $yaml['version'] ?? '', $yaml['message'] ?? ''];
            $args = $this->argsNodeFactory->createFromValues($items);
        }
        return new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall($methodCall, 'deprecate', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::DEPRECATED;
    }
}
