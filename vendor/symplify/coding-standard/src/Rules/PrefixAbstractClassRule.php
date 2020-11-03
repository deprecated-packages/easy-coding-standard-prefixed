<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Broker\Broker;
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
    public function __construct(\_PhpScoper2b44cb0c30af\PHPStan\Broker\Broker $broker)
    {
        $this->broker = $broker;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_::class];
    }
    /**
     * @param Class_ $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
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
        if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::startsWith($shortClassName, 'Abstract')) {
            return [];
        }
        return [\sprintf(self::ERROR_MESSAGE, $shortClassName)];
    }
}
