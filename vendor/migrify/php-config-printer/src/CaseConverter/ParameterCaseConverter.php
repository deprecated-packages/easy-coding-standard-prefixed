<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Provider\CurrentFilePathProvider;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperd9c3b46af121\PhpParser\Node\Expr;
use _PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall;
use _PhpScoperd9c3b46af121\PhpParser\Node\Expr\Variable;
use _PhpScoperd9c3b46af121\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * parameters: <---
 */
final class ParameterCaseConverter implements \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
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
    public function __construct(\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Provider\CurrentFilePathProvider $currentFilePathProvider, \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->currentFilePathProvider = $currentFilePathProvider;
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function getKey() : string
    {
        return \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlKey::PARAMETERS;
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        return $rootKey === \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlKey::PARAMETERS;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperd9c3b46af121\PhpParser\Node\Stmt\Expression
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
        $parametersVariable = new \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\Variable(\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\VariableName::PARAMETERS);
        $methodCall = new \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall($parametersVariable, \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        return new \_PhpScoperd9c3b46af121\PhpParser\Node\Stmt\Expression($methodCall);
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
