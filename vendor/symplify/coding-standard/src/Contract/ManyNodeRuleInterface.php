<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Contract;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
interface ManyNodeRuleInterface
{
    /**
     * @return class-string[]
     */
    public function getNodeTypes() : array;
    /**
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array;
}
