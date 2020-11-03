<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\New_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Name\FullyQualified;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\RequireNewArgumentConstantRule\RequireNewArgumentConstantRuleTest
 */
final class RequireNewArgumentConstantRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'New expression argument on position %d must use constant over value';
    /**
     * @var array<class-string, mixed[]>
     */
    private $constantArgByNewByType = [];
    /**
     * @param array<class-string, mixed[]> $constantArgByNewByType
     */
    public function __construct(array $constantArgByNewByType = [])
    {
        $this->constantArgByNewByType = $constantArgByNewByType;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\New_::class];
    }
    /**
     * @param New_ $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $class = $node->class;
        if (!$class instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Name\FullyQualified) {
            return [];
        }
        $className = $class->toString();
        if (!\array_key_exists($className, $this->constantArgByNewByType)) {
            return [];
        }
        $args = $node->args;
        $positions = $this->constantArgByNewByType[$className];
        foreach ($positions as $position) {
            if (!$args[$position]->value instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ClassConstFetch) {
                return [\sprintf(self::ERROR_MESSAGE, $position)];
            }
        }
        return [];
    }
}
