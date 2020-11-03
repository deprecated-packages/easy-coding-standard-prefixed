<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Doctrine\ORM\EntityManagerInterface;
use _PhpScoper2b44cb0c30af\Jean85\PrettyVersions;
use _PhpScoper2b44cb0c30af\Jean85\Version;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Reflection\MethodReflection;
use _PhpScoper2b44cb0c30af\PHPStan\Type\ThisType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\Type;
use _PhpScoper2b44cb0c30af\PHPStan\Type\TypeWithClassName;
use _PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symplify\CodingStandard\ValueObject\MethodName;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
use Symplify\PackageBuilder\Matcher\ArrayStringAndFnMatcher;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoFactoryInConstructorRule\NoFactoryInConstructorRuleTest
 */
final class NoFactoryInConstructorRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Do not use factory/method call in constructor. Put factory in config and get service with dependency injection';
    /**
     * @var string[]
     */
    private const ALLOWED_TYPES = [\Symplify\PackageBuilder\Parameter\ParameterProvider::class, \_PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface::class, \_PhpScoper2b44cb0c30af\Doctrine\ORM\EntityManagerInterface::class, \_PhpScoper2b44cb0c30af\Jean85\PrettyVersions::class, \_PhpScoper2b44cb0c30af\Jean85\Version::class];
    /**
     * @var string[]
     */
    private const SKIP_CLASS_NAMES = [
        // to resolve extra values
        '*\\ValueObject\\*',
    ];
    /**
     * @var ArrayStringAndFnMatcher
     */
    private $arrayStringAndFnMatcher;
    public function __construct(\Symplify\PackageBuilder\Matcher\ArrayStringAndFnMatcher $arrayStringAndFnMatcher)
    {
        $this->arrayStringAndFnMatcher = $arrayStringAndFnMatcher;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall::class];
    }
    /**
     * @param MethodCall $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$this->isInConstructMethod($scope)) {
            return [];
        }
        if (!$node->var instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable) {
            return [];
        }
        // just assign
        $parent = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        if ($parent instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch) {
            return [];
        }
        $callerType = $scope->getType($node->var);
        if ($callerType instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\ThisType) {
            return [];
        }
        if ($this->isAllowedType($callerType)) {
            return [];
        }
        if ($this->isInAllowedClass($scope)) {
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
    private function isAllowedType(\_PhpScoper2b44cb0c30af\PHPStan\Type\Type $type) : bool
    {
        if (!$type instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\TypeWithClassName) {
            return \false;
        }
        return $this->arrayStringAndFnMatcher->isMatch($type->getClassName(), self::ALLOWED_TYPES);
    }
    private function isInAllowedClass(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : bool
    {
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            return \false;
        }
        $className = $classReflection->getName();
        return $this->arrayStringAndFnMatcher->isMatch($className, self::SKIP_CLASS_NAMES);
    }
}
