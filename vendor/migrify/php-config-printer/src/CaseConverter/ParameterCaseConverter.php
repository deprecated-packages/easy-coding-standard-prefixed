<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Provider\CurrentFilePathProvider;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Variable;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * parameters: <---
 */
final class ParameterCaseConverter implements \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
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
    public function __construct(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Provider\CurrentFilePathProvider $currentFilePathProvider, \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->currentFilePathProvider = $currentFilePathProvider;
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function getKey() : string
    {
        return \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlKey::PARAMETERS;
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        return $rootKey === \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlKey::PARAMETERS;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperddde3ba4aebc\PhpParser\Node\Stmt\Expression
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
        $parametersVariable = new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Variable(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\VariableName::PARAMETERS);
        $methodCall = new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall($parametersVariable, \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Stmt\Expression($methodCall);
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
