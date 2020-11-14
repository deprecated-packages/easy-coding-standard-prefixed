<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopercda2b863d098\Nette\Utils\Strings;
use _PhpScopercda2b863d098\PhpParser\Node\Expr\MethodCall;
use _PhpScopercda2b863d098\PhpParser\Node\Expr\Variable;
use _PhpScopercda2b863d098\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class ConfiguredServiceCaseConverter implements \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScopercda2b863d098\PhpParser\Node\Stmt\Expression
    {
        $valuesForArgs = [$key];
        if (isset($values[\_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY])) {
            $valuesForArgs[] = $values[\_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY];
        }
        $args = $this->argsNodeFactory->createFromValues($valuesForArgs);
        $methodCall = new \_PhpScopercda2b863d098\PhpParser\Node\Expr\MethodCall(new \_PhpScopercda2b863d098\PhpParser\Node\Expr\Variable(\_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        $methodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $methodCall);
        $expression = new \_PhpScopercda2b863d098\PhpParser\Node\Stmt\Expression($methodCall);
        $expression->setAttribute('comments', $methodCall->getComments());
        return $expression;
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if ($key === \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS) {
            return \false;
        }
        if ($key === \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_INSTANCEOF) {
            return \false;
        }
        if (isset($values[\_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\YamlKey::RESOURCE])) {
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
        if (isset($values[\_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS])) {
            return \true;
        }
        return \is_string($values) && \_PhpScopercda2b863d098\Nette\Utils\Strings::startsWith($values, '@');
    }
}
