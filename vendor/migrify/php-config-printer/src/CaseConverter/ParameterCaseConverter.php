<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\Provider\CurrentFilePathProvider;
use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Expr;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Expr\MethodCall;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Expr\Variable;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * parameters: <---
 */
final class ParameterCaseConverter implements \_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
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
    public function __construct(\_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\Provider\CurrentFilePathProvider $currentFilePathProvider, \_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->currentFilePathProvider = $currentFilePathProvider;
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function getKey() : string
    {
        return \_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\ValueObject\YamlKey::PARAMETERS;
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        return $rootKey === \_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\ValueObject\YamlKey::PARAMETERS;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper49c742f5a4ee\PhpParser\Node\Stmt\Expression
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
        $parametersVariable = new \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr\Variable(\_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\ValueObject\VariableName::PARAMETERS);
        $methodCall = new \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr\MethodCall($parametersVariable, \_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        return new \_PhpScoper49c742f5a4ee\PhpParser\Node\Stmt\Expression($methodCall);
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
