<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use Symplify\PackageBuilder\Matcher\ArrayStringAndFnMatcher;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\RequireDataProviderTestMethodRule\RequireDataProviderTestMethodRuleTest
 */
final class RequireDataProviderTestMethodRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Test method "%s()" must use data provider';
    /**
     * @var string[]
     */
    private $classesRequiringDataProvider = [];
    /**
     * @var ArrayStringAndFnMatcher
     */
    private $arrayStringAndFnMatcher;
    /**
     * @param string[] $classesRequiringDataProvider
     */
    public function __construct(\Symplify\PackageBuilder\Matcher\ArrayStringAndFnMatcher $arrayStringAndFnMatcher, array $classesRequiringDataProvider = [])
    {
        $this->classesRequiringDataProvider = $classesRequiringDataProvider;
        $this->arrayStringAndFnMatcher = $arrayStringAndFnMatcher;
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
        $methodName = (string) $node->name;
        if (!\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::startsWith($methodName, 'test')) {
            return [];
        }
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            return [];
        }
        $className = $classReflection->getName();
        if (!$this->arrayStringAndFnMatcher->isMatchOrSubType($className, $this->classesRequiringDataProvider)) {
            return [];
        }
        if (\count((array) $node->params) !== 0) {
            return [];
        }
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $methodName);
        return [$errorMessage];
    }
}
