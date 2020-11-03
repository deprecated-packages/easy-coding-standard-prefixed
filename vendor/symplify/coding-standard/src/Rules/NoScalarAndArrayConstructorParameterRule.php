<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Reflection\MethodReflection;
use _PhpScoper2b44cb0c30af\PHPStan\Rules\Rule;
use _PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScoper2b44cb0c30af\Symfony\Component\HttpKernel\Kernel;
use Symplify\Autodiscovery\Discovery;
use Symplify\Autodiscovery\Finder\AutodiscoveryFinder;
use Symplify\CodingStandard\PHPStan\Types\ScalarTypeAnalyser;
use Symplify\CodingStandard\PHPStan\VariableAsParamAnalyser;
use Symplify\FlexLoader\Flex\FlexLoader;
use Throwable;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoScalarAndArrayConstructorParameterRule\NoScalarAndArrayConstructorParameterRuleTest
 */
final class NoScalarAndArrayConstructorParameterRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Do not use scalar or array as constructor parameter. Use ParameterProvider service instead';
    /**
     * @var string
     * @see https://regex101.com/r/HDOhtp/4
     */
    private const VALUE_OBJECT_REGEX = '#\\bValueObject|Entity|Event\\b#';
    /**
     * @var string[]
     */
    private const ALLOWED_TYPES = [
        \_PhpScoper2b44cb0c30af\PHPStan\Rules\Rule::class,
        \Throwable::class,
        // part of before construction of dependency injeciton
        \_PhpScoper2b44cb0c30af\Symfony\Component\HttpKernel\Kernel::class,
        \_PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface::class,
        \Symplify\FlexLoader\Flex\FlexLoader::class,
        \Symplify\Autodiscovery\Finder\AutodiscoveryFinder::class,
        \Symplify\Autodiscovery\Discovery::class,
        \Symplify\Autodiscovery\Finder\AutodiscoveryFinder::class,
        \_PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\Extension\Extension::class,
    ];
    /**
     * @var VariableAsParamAnalyser
     */
    private $variableAsParamAnalyser;
    /**
     * @var ScalarTypeAnalyser
     */
    private $scalarTypeAnalyser;
    public function __construct(\Symplify\CodingStandard\PHPStan\VariableAsParamAnalyser $variableAsParamAnalyser, \Symplify\CodingStandard\PHPStan\Types\ScalarTypeAnalyser $scalarTypeAnalyser)
    {
        $this->variableAsParamAnalyser = $variableAsParamAnalyser;
        $this->scalarTypeAnalyser = $scalarTypeAnalyser;
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
        if ($this->isClassAllowed($scope)) {
            return [];
        }
        if ($this->isValueObjectNamespace($scope)) {
            return [];
        }
        $functionReflection = $scope->getFunction();
        if (!$functionReflection instanceof \_PhpScoper2b44cb0c30af\PHPStan\Reflection\MethodReflection) {
            return [];
        }
        if (!$this->variableAsParamAnalyser->isVariableFromConstructorParam($functionReflection, $node)) {
            return [];
        }
        // is variable in parameter?
        $variableType = $scope->getType($node);
        if (!$this->scalarTypeAnalyser->isScalarOrArrayType($variableType)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function isValueObjectNamespace(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : bool
    {
        return (bool) \_PhpScoper2b44cb0c30af\Nette\Utils\Strings::match($scope->getFile(), self::VALUE_OBJECT_REGEX);
    }
    private function isClassAllowed(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : bool
    {
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            return \false;
        }
        foreach (self::ALLOWED_TYPES as $allowedType) {
            if (!\is_a($classReflection->getName(), $allowedType, \true)) {
                continue;
            }
            return \true;
        }
        return \false;
    }
}
