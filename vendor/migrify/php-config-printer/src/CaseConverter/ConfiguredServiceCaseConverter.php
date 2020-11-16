<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperbcc0395698f8\Nette\Utils\Strings;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\Variable;
use _PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class ConfiguredServiceCaseConverter implements \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression
    {
        $valuesForArgs = [$key];
        if (isset($values[\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY])) {
            $valuesForArgs[] = $values[\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY];
        }
        $args = $this->argsNodeFactory->createFromValues($valuesForArgs);
        $methodCall = new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall(new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\Variable(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        $methodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $methodCall);
        $expression = new \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression($methodCall);
        $expression->setAttribute('comments', $methodCall->getComments());
        return $expression;
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if ($key === \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS) {
            return \false;
        }
        if ($key === \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_INSTANCEOF) {
            return \false;
        }
        if (isset($values[\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::RESOURCE])) {
            return \false;
        }
        // handled by @see \Migrify\PhpConfigPrinter\CaseConverter\CaseConverter\AliasCaseConverter
        if ($this->isAlias($values)) {
            return \false;
        }
        if ($values === null) {
            return \false;
        }
        return $values !== [];
    }
    private function isAlias($values) : bool
    {
        if (isset($values[\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS])) {
            return \true;
        }
        return \is_string($values) && \_PhpScoperbcc0395698f8\Nette\Utils\Strings::startsWith($values, '@');
    }
}
