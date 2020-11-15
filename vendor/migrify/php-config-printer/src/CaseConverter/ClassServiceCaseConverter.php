<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall;
use _PhpScoper279cf54b77ad\PhpParser\Node\Expr\Variable;
use _PhpScoper279cf54b77ad\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     Some:
 *         class: Other <---
 */
final class ClassServiceCaseConverter implements \_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper279cf54b77ad\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$key, $values[\_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]]);
        $setMethodCall = new \_PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall(new \_PhpScoper279cf54b77ad\PhpParser\Node\Expr\Variable(\_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        unset($values[\_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]);
        $setMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $setMethodCall);
        return new \_PhpScoper279cf54b77ad\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (\is_array($values) && \count($values) !== 1) {
            return \false;
        }
        return isset($values[\_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]) && !isset($values[\_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS]);
    }
}
