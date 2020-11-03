<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Array_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayItem;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\New_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Return_;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Reflection\MethodReflection;
use Symplify\CodingStandard\PHPStan\ParentMethodAnalyser;
use Symplify\EasyTesting\PHPUnit\StaticPHPUnitEnvironment;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoReturnArrayVariableListRule\NoReturnArrayVariableListRuleTest
 */
final class NoReturnArrayVariableListRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use value object over return of values';
    /**
     * @var string
     * @see https://regex101.com/r/Ynmm3J/1
     */
    private const VALUE_OBJECT_REGEX = '#\\/ValueObject\\/#i';
    /**
     * @var string
     * @see https://regex101.com/r/C5d1zH/1
     */
    private const TESTS_DIRECTORY_REGEX = '#\\/Tests\\/#i';
    /**
     * @var ParentMethodAnalyser
     */
    private $parentMethodAnalyser;
    public function __construct(\Symplify\CodingStandard\PHPStan\ParentMethodAnalyser $parentMethodAnalyser)
    {
        $this->parentMethodAnalyser = $parentMethodAnalyser;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Return_::class];
    }
    /**
     * @param Return_ $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if ($this->shouldSkip($scope, $node)) {
            return [];
        }
        /** @var Array_ $array */
        $array = $node->expr;
        $itemCount = \count((array) $array->items);
        if ($itemCount < 2) {
            return [];
        }
        $exprCount = $this->resolveExprCount($array);
        if ($exprCount < 2) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function shouldSkip(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope, $node) : bool
    {
        // skip tests
        if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::match($scope->getFile(), self::TESTS_DIRECTORY_REGEX) && !\Symplify\EasyTesting\PHPUnit\StaticPHPUnitEnvironment::isPHPUnitRun()) {
            return \true;
        }
        // skip value objects
        if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::match($scope->getFile(), self::VALUE_OBJECT_REGEX)) {
            return \true;
        }
        if (!$node->expr instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Array_) {
            return \true;
        }
        // guarded by parent method
        $functionLike = $scope->getFunction();
        if ($functionLike instanceof \_PhpScoper2b44cb0c30af\PHPStan\Reflection\MethodReflection) {
            return $this->parentMethodAnalyser->hasParentClassMethodWithSameName($scope, $functionLike->getName());
        }
        return \false;
    }
    private function resolveExprCount(\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Array_ $array) : int
    {
        $exprCount = 0;
        foreach ((array) $array->items as $item) {
            if (!$item instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayItem) {
                continue;
            }
            if (!$item->value instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr) {
                continue;
            }
            if ($item->value instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\New_) {
                continue;
            }
            ++$exprCount;
        }
        return $exprCount;
    }
}
