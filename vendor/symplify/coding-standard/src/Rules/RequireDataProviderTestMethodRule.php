<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\Nette\Utils\Strings;
use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
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
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod::class];
    }
    /**
     * @param ClassMethod $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $methodName = (string) $node->name;
        if (!\_PhpScoper8de082cbb8c7\Nette\Utils\Strings::startsWith($methodName, 'test')) {
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
