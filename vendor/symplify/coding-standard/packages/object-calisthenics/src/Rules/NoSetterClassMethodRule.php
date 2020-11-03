<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Rules;

use _PhpScoper8de082cbb8c7\Nette\Utils\Strings;
use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use _PhpScoper8de082cbb8c7\PHPStan\Rules;
use Symplify\CodingStandard\Rules\AbstractSymplifyRule;
/**
 * @see https://github.com/object-calisthenics/phpcs-calisthenics-rules#9-do-not-use-getters-and-setters
 *
 * @see \Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\NoSetterClassMethodRule\NoSetterClassMethodRuleTest
 */
final class NoSetterClassMethodRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Setter "%s()" is not allowed. Use constructor injection or behavior name instead, e.g. "changeName()"';
    /**
     * @var string
     * @see https://regex101.com/r/IMIpoN/1/
     */
    private const SETTER_REGEX = '#^set[\\w+]#';
    /**
     * @var string[]
     */
    private $allowedSetterClasses = [];
    /**
     * @param string[] $allowedSetterClasses
     */
    public function __construct(array $allowedSetterClasses = [])
    {
        $this->allowedSetterClasses = $allowedSetterClasses;
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
        if (!\_PhpScoper8de082cbb8c7\Nette\Utils\Strings::match($methodName, self::SETTER_REGEX)) {
            return [];
        }
        if ($this->isClassExcluded($scope)) {
            return [];
        }
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $methodName);
        return [$errorMessage];
    }
    private function isClassExcluded(\_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : bool
    {
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            return \false;
        }
        foreach ($this->allowedSetterClasses as $allowedClass) {
            if (\fnmatch($allowedClass, $classReflection->getName())) {
                return \true;
            }
        }
        return \false;
    }
}
