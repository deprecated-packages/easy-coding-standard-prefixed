<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Contract;

use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
interface ManyNodeRuleInterface
{
    /**
     * @return class-string[]
     */
    public function getNodeTypes() : array;
    /**
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array;
}
