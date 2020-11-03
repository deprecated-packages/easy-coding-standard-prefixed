<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Property;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\PHPStan\NodeAnalyser\ProtectedAnalyser;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\ForbiddenProtectedPropertyRule\ForbiddenProtectedPropertyRuleTest
 */
final class ForbiddenProtectedPropertyRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Property with protected modifier is not allowed. Use interface instead.';
    /**
     * @var ProtectedAnalyser
     */
    private $protectedAnalyser;
    public function __construct(\Symplify\CodingStandard\PHPStan\NodeAnalyser\ProtectedAnalyser $protectedAnalyser)
    {
        $this->protectedAnalyser = $protectedAnalyser;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Property::class];
    }
    /**
     * @param Property $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$node->isProtected()) {
            return [];
        }
        if ($this->protectedAnalyser->isProtectedPropertyOrClassConstAllowed($node)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
