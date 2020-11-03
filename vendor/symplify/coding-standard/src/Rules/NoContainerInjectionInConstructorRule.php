<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Reflection\MethodReflection;
use _PhpScoper2b44cb0c30af\Psr\Container\ContainerInterface;
use _PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\ContainerBuilder;
use Symplify\CodingStandard\PHPStan\Types\ContainsTypeAnalyser;
use Symplify\CodingStandard\ValueObject\MethodName;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoContainerInjectionInConstructorRule\NoContainerInjectionInConstructorRuleTest
 */
final class NoContainerInjectionInConstructorRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Instead of container injection, use specific service';
    /**
     * @var ContainsTypeAnalyser
     */
    private $containsTypeAnalyser;
    public function __construct(\Symplify\CodingStandard\PHPStan\Types\ContainsTypeAnalyser $containsTypeAnalyser)
    {
        $this->containsTypeAnalyser = $containsTypeAnalyser;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable::class];
    }
    /**
     * @param Variable $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$this->isInConstructMethod($scope)) {
            return [];
        }
        if (!$this->containsTypeAnalyser->containsExprTypes($node, $scope, [\_PhpScoper2b44cb0c30af\Psr\Container\ContainerInterface::class])) {
            return [];
        }
        if ($this->containsTypeAnalyser->containsExprTypes($node, $scope, [\_PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\ContainerBuilder::class])) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function isInConstructMethod(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : bool
    {
        $reflectionFunction = $scope->getFunction();
        if (!$reflectionFunction instanceof \_PhpScoper2b44cb0c30af\PHPStan\Reflection\MethodReflection) {
            return \false;
        }
        return $reflectionFunction->getName() === \Symplify\CodingStandard\ValueObject\MethodName::CONSTRUCTOR;
    }
}
