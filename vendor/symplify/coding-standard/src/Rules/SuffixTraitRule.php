<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\Nette\Utils\Strings;
use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Trait_;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\SuffixTraitRule\SuffixTraitRuleTest
 */
final class SuffixTraitRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Trait name "%s" must be suffixed with "Trait"';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Trait_::class];
    }
    /**
     * @param Trait_ $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $traitName = (string) $node->name;
        if (\_PhpScoper8de082cbb8c7\Nette\Utils\Strings::endsWith($traitName, 'Trait')) {
            return [];
        }
        return [\sprintf(self::ERROR_MESSAGE, $traitName)];
    }
}
