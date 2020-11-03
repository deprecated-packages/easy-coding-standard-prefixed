<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Contract;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
interface ManyNodeRuleInterface
{
    /**
     * @return class-string[]
     */
    public function getNodeTypes() : array;
    /**
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array;
}
