<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Sorter\YamlArgumentSorter;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperddde3ba4aebc\Nette\Utils\Strings;
use _PhpScoperddde3ba4aebc\PhpParser\BuilderHelpers;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Arg;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Variable;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Scalar\String_;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * imports: <---
 */
final class ImportCaseConverter implements \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
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
    public function __construct(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Sorter\YamlArgumentSorter $yamlArgumentSorter, \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->yamlArgumentSorter = $yamlArgumentSorter;
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function getKey() : string
    {
        return \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IMPORTS;
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        return $rootKey === \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IMPORTS;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperddde3ba4aebc\PhpParser\Node\Stmt\Expression
    {
        if (\is_array($values)) {
            $arguments = $this->yamlArgumentSorter->sortArgumentsByKeyIfExists($values, [\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlKey::RESOURCE => '', 'type' => null, \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IGNORE_ERRORS => \false]);
            return $this->createImportMethodCall($arguments);
        }
        throw new \_PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    /**
     * @param mixed[] $arguments
     */
    private function createImportMethodCall(array $arguments) : \_PhpScoperddde3ba4aebc\PhpParser\Node\Stmt\Expression
    {
        $containerConfiguratorVariable = new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Variable(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        $args = $this->createArgs($arguments);
        $methodCall = new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall($containerConfiguratorVariable, 'import', $args);
        return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Stmt\Expression($methodCall);
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
            $args[] = new \_PhpScoperddde3ba4aebc\PhpParser\Node\Arg($expr);
        }
        return $args;
    }
    private function shouldSkipDefaultValue(string $name, $value, array $arguments) : bool
    {
        // skip default value for "ignore_errors"
        if ($name === \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IGNORE_ERRORS && $value === \false) {
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
        return isset($arguments[\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IGNORE_ERRORS]) && $arguments[\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IGNORE_ERRORS] === \false;
    }
    private function replaceImportedFileSuffix($value)
    {
        if (!\is_string($value)) {
            return $value;
        }
        return \_PhpScoperddde3ba4aebc\Nette\Utils\Strings::replace($value, self::INPUT_SUFFIX_REGEX, '.php');
    }
    private function resolveExpr($value) : \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr
    {
        if (\is_bool($value) || \in_array($value, ['annotations', 'directory', 'glob'], \true)) {
            return \_PhpScoperddde3ba4aebc\PhpParser\BuilderHelpers::normalizeValue($value);
        }
        if ($value === 'not_found') {
            return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Scalar\String_('not_found');
        }
        $value = $this->replaceImportedFileSuffix($value);
        return $this->commonNodeFactory->createAbsoluteDirExpr($value);
    }
}
