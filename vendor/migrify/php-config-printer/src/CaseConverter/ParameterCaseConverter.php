<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Provider\CurrentFilePathProvider;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperad4b7e2c09d8\PhpParser\Node\Expr;
use _PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall;
use _PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\Variable;
use _PhpScoperad4b7e2c09d8\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * parameters: <---
 */
final class ParameterCaseConverter implements \_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var CurrentFilePathProvider
     */
    private $currentFilePathProvider;
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Provider\CurrentFilePathProvider $currentFilePathProvider, \_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->currentFilePathProvider = $currentFilePathProvider;
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function getKey() : string
    {
        return \_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::PARAMETERS;
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        return $rootKey === \_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::PARAMETERS;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperad4b7e2c09d8\PhpParser\Node\Stmt\Expression
    {
        if (\is_string($values)) {
            $values = $this->prefixWithDirConstantIfExistingPath($values);
        }
        if (\is_array($values)) {
            foreach ($values as $subKey => $subValue) {
                if (!\is_string($subValue)) {
                    continue;
                }
                $values[$subKey] = $this->prefixWithDirConstantIfExistingPath($subValue);
            }
        }
        $args = $this->argsNodeFactory->createFromValues([$key, $values]);
        $parametersVariable = new \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\Variable(\_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\VariableName::PARAMETERS);
        $methodCall = new \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall($parametersVariable, \_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        return new \_PhpScoperad4b7e2c09d8\PhpParser\Node\Stmt\Expression($methodCall);
    }
    /**
     * @return Expr|string
     */
    private function prefixWithDirConstantIfExistingPath(string $value)
    {
        $filePath = $this->currentFilePathProvider->getFilePath();
        if ($filePath === null) {
            return $value;
        }
        $configDirectory = \dirname($filePath);
        $possibleConfigPath = $configDirectory . '/' . $value;
        if (\is_file($possibleConfigPath) || \is_dir($possibleConfigPath)) {
            return $this->commonNodeFactory->createAbsoluteDirExpr($value);
        }
        return $value;
    }
}
