<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperb09c3ec8e01a\Nette\Utils\Strings;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Variable;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class ConfiguredServiceCaseConverter implements \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Expression
    {
        $valuesForArgs = [$key];
        if (isset($values[\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY])) {
            $valuesForArgs[] = $values[\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY];
        }
        $args = $this->argsNodeFactory->createFromValues($valuesForArgs);
        $methodCall = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall(new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Variable(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        $methodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $methodCall);
        $expression = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Expression($methodCall);
        $expression->setAttribute('comments', $methodCall->getComments());
        return $expression;
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if ($key === \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS) {
            return \false;
        }
        if ($key === \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_INSTANCEOF) {
            return \false;
        }
        if (isset($values[\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey::RESOURCE])) {
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
        if (isset($values[\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS])) {
            return \true;
        }
        return \is_string($values) && \_PhpScoperb09c3ec8e01a\Nette\Utils\Strings::startsWith($values, '@');
    }
}
