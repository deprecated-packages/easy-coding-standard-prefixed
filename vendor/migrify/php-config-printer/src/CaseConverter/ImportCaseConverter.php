<?php

declare (strict_types=1);
namespace _PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper1103e00fb46b\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\Sorter\YamlArgumentSorter;
use _PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper1103e00fb46b\Nette\Utils\Strings;
use _PhpScoper1103e00fb46b\PhpParser\BuilderHelpers;
use _PhpScoper1103e00fb46b\PhpParser\Node\Arg;
use _PhpScoper1103e00fb46b\PhpParser\Node\Expr;
use _PhpScoper1103e00fb46b\PhpParser\Node\Expr\MethodCall;
use _PhpScoper1103e00fb46b\PhpParser\Node\Expr\Variable;
use _PhpScoper1103e00fb46b\PhpParser\Node\Scalar\String_;
use _PhpScoper1103e00fb46b\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * imports: <---
 */
final class ImportCaseConverter implements \_PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
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
    public function __construct(\_PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\Sorter\YamlArgumentSorter $yamlArgumentSorter, \_PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->yamlArgumentSorter = $yamlArgumentSorter;
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function getKey() : string
    {
        return \_PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IMPORTS;
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        return $rootKey === \_PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IMPORTS;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper1103e00fb46b\PhpParser\Node\Stmt\Expression
    {
        if (\is_array($values)) {
            $arguments = $this->yamlArgumentSorter->sortArgumentsByKeyIfExists($values, [\_PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\ValueObject\YamlKey::RESOURCE => '', 'type' => null, \_PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IGNORE_ERRORS => \false]);
            return $this->createImportMethodCall($arguments);
        }
        throw new \_PhpScoper1103e00fb46b\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    /**
     * @param mixed[] $arguments
     */
    private function createImportMethodCall(array $arguments) : \_PhpScoper1103e00fb46b\PhpParser\Node\Stmt\Expression
    {
        $containerConfiguratorVariable = new \_PhpScoper1103e00fb46b\PhpParser\Node\Expr\Variable(\_PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        $args = $this->createArgs($arguments);
        $methodCall = new \_PhpScoper1103e00fb46b\PhpParser\Node\Expr\MethodCall($containerConfiguratorVariable, 'import', $args);
        return new \_PhpScoper1103e00fb46b\PhpParser\Node\Stmt\Expression($methodCall);
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
            $args[] = new \_PhpScoper1103e00fb46b\PhpParser\Node\Arg($expr);
        }
        return $args;
    }
    private function shouldSkipDefaultValue(string $name, $value, array $arguments) : bool
    {
        // skip default value for "ignore_errors"
        if ($name === \_PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IGNORE_ERRORS && $value === \false) {
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
        return isset($arguments[\_PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IGNORE_ERRORS]) && $arguments[\_PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\ValueObject\YamlKey::IGNORE_ERRORS] === \false;
    }
    private function replaceImportedFileSuffix($value)
    {
        if (!\is_string($value)) {
            return $value;
        }
        return \_PhpScoper1103e00fb46b\Nette\Utils\Strings::replace($value, self::INPUT_SUFFIX_REGEX, '.php');
    }
    private function resolveExpr($value) : \_PhpScoper1103e00fb46b\PhpParser\Node\Expr
    {
        if (\is_bool($value) || \in_array($value, ['annotations', 'directory', 'glob'], \true)) {
            return \_PhpScoper1103e00fb46b\PhpParser\BuilderHelpers::normalizeValue($value);
        }
        if ($value === 'not_found') {
            return new \_PhpScoper1103e00fb46b\PhpParser\Node\Scalar\String_('not_found');
        }
        $value = $this->replaceImportedFileSuffix($value);
        return $this->commonNodeFactory->createAbsoluteDirExpr($value);
    }
}
