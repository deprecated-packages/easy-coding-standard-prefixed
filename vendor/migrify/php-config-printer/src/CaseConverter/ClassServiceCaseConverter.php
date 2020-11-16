<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\Variable;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     Some:
 *         class: Other <---
 */
final class ClassServiceCaseConverter implements \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$key, $values[\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]]);
        $setMethodCall = new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall(new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\Variable(\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        unset($values[\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]);
        $setMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $setMethodCall);
        return new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (\is_array($values) && \count($values) !== 1) {
            return \false;
        }
        return isset($values[\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]) && !isset($values[\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS]);
    }
}
