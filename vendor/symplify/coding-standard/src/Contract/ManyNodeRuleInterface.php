<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Contract;

use _PhpScoper5928e324b45e\PhpParser\Node;
use _PhpScoper5928e324b45e\PHPStan\Analyser\Scope;
interface ManyNodeRuleInterface
{
    /**
     * @return class-string[]
     */
    public function getNodeTypes() : array;
    /**
     * @return string[]
     */
    public function process(\_PhpScoper5928e324b45e\PhpParser\Node $node, \_PhpScoper5928e324b45e\PHPStan\Analyser\Scope $scope) : array;
}
