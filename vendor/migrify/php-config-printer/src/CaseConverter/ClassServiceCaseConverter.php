<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\Variable;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     Some:
 *         class: Other <---
 */
final class ClassServiceCaseConverter implements \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$key, $values[\_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]]);
        $setMethodCall = new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall(new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\Variable(\_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        unset($values[\_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]);
        $setMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $setMethodCall);
        return new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (\is_array($values) && \count($values) !== 1) {
            return \false;
        }
        return isset($values[\_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]) && !isset($values[\_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS]);
    }
}
