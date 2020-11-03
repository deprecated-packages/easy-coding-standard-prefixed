<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper2b44cb0c30af\PhpParser\NodeFinder;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Type\ThisType;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\PreferredRawDataInTestDataProviderRule\PreferredRawDataInTestDataProviderRuleTest
 */
final class PreferredRawDataInTestDataProviderRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Code configured at setUp() cannot be used in data provider. Move it to test() method';
    /**
     * @var string
     * @see https://regex101.com/r/WaNbZ1/2
     */
    private const DATAPROVIDER_REGEX = '#\\*\\s+@dataProvider\\s+(?<dataProviderMethod>.*)\\n?#';
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoper2b44cb0c30af\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod::class];
    }
    /**
     * @param ClassMethod $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        $dataProviderMethodName = $this->matchDataProviderMethodName($node);
        if ($dataProviderMethodName === null) {
            return [];
        }
        $classMethod = $this->findDataProviderClassMethod($node, $dataProviderMethodName);
        if ($classMethod === null) {
            return [];
        }
        if ($this->isSkipped($classMethod, $scope)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function findDataProviderClassMethod(\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod $classMethod, string $methodName) : ?\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod
    {
        $class = $classMethod->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        if (!$class instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_) {
            return null;
        }
        return $class->getMethod($methodName);
    }
    private function matchDataProviderMethodName(\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod $classMethod) : ?string
    {
        $docComment = $classMethod->getDocComment();
        if ($docComment === null) {
            return null;
        }
        $match = \_PhpScoper2b44cb0c30af\Nette\Utils\Strings::match($docComment->getText(), self::DATAPROVIDER_REGEX);
        if (!$match) {
            return null;
        }
        return $match['dataProviderMethod'];
    }
    private function isSkipped(\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod $classMethod, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : bool
    {
        /** @var Variable[] $variables */
        $variables = $this->nodeFinder->findInstanceOf((array) $classMethod->getStmts(), \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable::class);
        foreach ($variables as $variable) {
            $callerType = $scope->getType($variable);
            if ($callerType instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\ThisType) {
                return \false;
            }
        }
        return \true;
    }
}
