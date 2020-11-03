<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\Nette\Utils\Strings;
use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Name;
use _PhpScoper3d04c8135695\PhpParser\Node\Param;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\ValueObject\MethodName;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoEntityManagerInControllerRule\NoEntityManagerInControllerRuleTest
 */
final class NoEntityManagerInControllerRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use specific repository over entity manager in Controller';
    /**
     * @var string
     * @see https://regex101.com/r/hJt00N/1
     */
    private const CONTROLLER_PRESENTER_REGEX = '#(Controller|Presenter)$#';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod::class];
    }
    /**
     * @param ClassMethod $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        if ((string) $node->name !== \Symplify\CodingStandard\ValueObject\MethodName::CONSTRUCTOR) {
            return [];
        }
        if (!$this->isInControllerClass($scope)) {
            return [];
        }
        foreach ($node->params as $param) {
            if (!$this->isEntityManagerParam($param)) {
                continue;
            }
            return [self::ERROR_MESSAGE];
        }
        return [];
    }
    private function isInControllerClass(\_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : bool
    {
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            return \false;
        }
        return (bool) \_PhpScoper3d04c8135695\Nette\Utils\Strings::match($classReflection->getName(), self::CONTROLLER_PRESENTER_REGEX);
    }
    private function isEntityManagerParam(\_PhpScoper3d04c8135695\PhpParser\Node\Param $param) : bool
    {
        if ($param->type === null) {
            return \false;
        }
        if (!$param->type instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Name) {
            return \false;
        }
        $paramType = $param->type->toString();
        if ($paramType === 'Doctrine\\ORM\\EntityManager') {
            return \true;
        }
        return \is_a($paramType, '_PhpScoper3d04c8135695\\Doctrine\\ORM\\EntityManagerInterface', \true);
    }
}
