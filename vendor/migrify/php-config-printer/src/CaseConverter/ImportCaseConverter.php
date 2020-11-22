<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperfacc742d2745\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Sorter\YamlArgumentSorter;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperfacc742d2745\Nette\Utils\Strings;
use _PhpScoperfacc742d2745\PhpParser\BuilderHelpers;
use _PhpScoperfacc742d2745\PhpParser\Node\Arg;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\Variable;
use _PhpScoperfacc742d2745\PhpParser\Node\Scalar\String_;
use _PhpScoperfacc742d2745\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * imports: <---
 */
final class ImportCaseConverter implements \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @see https://regex101.com/r/hOTdIE/1
     * @var string
     */
    private const INPUT_SUFFIX_REGEX = '#\\.(yml|yaml|xml)$#';
    /**
     * @var YamlArgumentSorter
     */
    private $yamlArgumentSorter;
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Sorter\YamlArgumentSorter $yamlArgumentSorter, \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->yamlArgumentSorter = $yamlArgumentSorter;
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function getKey() : string
    {
        return \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IMPORTS;
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        return $rootKey === \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IMPORTS;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperfacc742d2745\PhpParser\Node\Stmt\Expression
    {
        if (\is_array($values)) {
            $arguments = $this->yamlArgumentSorter->sortArgumentsByKeyIfExists($values, [\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey::RESOURCE => '', 'type' => null, \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IGNORE_ERRORS => \false]);
            return $this->createImportMethodCall($arguments);
        }
        throw new \_PhpScoperfacc742d2745\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    /**
     * @param mixed[] $arguments
     */
    private function createImportMethodCall(array $arguments) : \_PhpScoperfacc742d2745\PhpParser\Node\Stmt\Expression
    {
        $containerConfiguratorVariable = new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\Variable(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        $args = $this->createArgs($arguments);
        $methodCall = new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall($containerConfiguratorVariable, 'import', $args);
        return new \_PhpScoperfacc742d2745\PhpParser\Node\Stmt\Expression($methodCall);
    }
    /**
     * @param mixed[] $arguments
     * @return Arg[]
     */
    private function createArgs(array $arguments) : array
    {
        $args = [];
        foreach ($arguments as $name => $value) {
            if ($this->shouldSkipDefaultValue($name, $value, $arguments)) {
                continue;
            }
            $expr = $this->resolveExpr($value);
            $args[] = new \_PhpScoperfacc742d2745\PhpParser\Node\Arg($expr);
        }
        return $args;
    }
    private function shouldSkipDefaultValue(string $name, $value, array $arguments) : bool
    {
        // skip default value for "ignore_errors"
        if ($name === \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IGNORE_ERRORS && $value === \false) {
            return \true;
        }
        // check if default value for "type"
        if ($name !== 'type') {
            return \false;
        }
        if ($value !== null) {
            return \false;
        }
        // follow by default value for "ignore_errors"
        return isset($arguments[\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IGNORE_ERRORS]) && $arguments[\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IGNORE_ERRORS] === \false;
    }
    private function replaceImportedFileSuffix($value)
    {
        if (!\is_string($value)) {
            return $value;
        }
        return \_PhpScoperfacc742d2745\Nette\Utils\Strings::replace($value, self::INPUT_SUFFIX_REGEX, '.php');
    }
    private function resolveExpr($value) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr
    {
        if (\is_bool($value) || \in_array($value, ['annotations', 'directory', 'glob'], \true)) {
            return \_PhpScoperfacc742d2745\PhpParser\BuilderHelpers::normalizeValue($value);
        }
        if ($value === 'not_found') {
            return new \_PhpScoperfacc742d2745\PhpParser\Node\Scalar\String_('not_found');
        }
        $value = $this->replaceImportedFileSuffix($value);
        return $this->commonNodeFactory->createAbsoluteDirExpr($value);
    }
}
