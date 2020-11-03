<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\Nette\Utils\Strings;
use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Identifier;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\CheckRequiredAbstractKeywordForClassNameStartWithAbstractRule\CheckRequiredAbstractKeywordForClassNameStartWithAbstractRuleTest
 */
final class CheckRequiredAbstractKeywordForClassNameStartWithAbstractRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Class name start with Abstract must have abstract keyword';
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
        /** @var Identifier $shortClassName */
        $shortClassName = $node->name;
        $className = \ucfirst($shortClassName->toString());
        if ($node->isAbstract() || !\_PhpScoper8de082cbb8c7\Nette\Utils\Strings::startsWith($className, 'Abstract')) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
