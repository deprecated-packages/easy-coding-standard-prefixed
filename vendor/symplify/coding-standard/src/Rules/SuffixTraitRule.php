<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Trait_;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
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
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Trait_::class];
    }
    /**
     * @param Trait_ $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        $traitName = (string) $node->name;
        if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::endsWith($traitName, 'Trait')) {
            return [];
        }
        return [\sprintf(self::ERROR_MESSAGE, $traitName)];
    }
}
