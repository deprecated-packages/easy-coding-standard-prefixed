<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\Nette\Utils\Strings;
use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use _PhpScoper8de082cbb8c7\PHPStan\Broker\Broker;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\PrefixAbstractClassRule\PrefixAbstractClassRuleTest
 */
final class PrefixAbstractClassRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Abstract class name "%s" must be prefixed with "Abstract"';
    /**
     * @var Broker
     */
    private $broker;
    public function __construct(\_PhpScoper8de082cbb8c7\PHPStan\Broker\Broker $broker)
    {
        $this->broker = $broker;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_::class];
    }
    /**
     * @param Class_ $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $className = (string) $node->namespacedName;
        if (!\class_exists($className)) {
            return [];
        }
        $classReflection = $this->broker->getClass($className);
        if (!$classReflection->isAbstract()) {
            return [];
        }
        $shortClassName = (string) $node->name;
        if (\_PhpScoper8de082cbb8c7\Nette\Utils\Strings::startsWith($shortClassName, 'Abstract')) {
            return [];
        }
        return [\sprintf(self::ERROR_MESSAGE, $shortClassName)];
    }
}
