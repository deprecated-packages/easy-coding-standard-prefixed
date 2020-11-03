<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Comment\Doc;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoMethodTagInClassDocblockRule\NoMethodTagInClassDocblockRuleTest
 */
final class NoMethodTagInClassDocblockRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Do not use @method tag in class docblock';
    /**
     * @var string
     * @see https://regex101.com/r/lpeFd6/1
     */
    public const METHOD_TAG_REGEX = '#\\*\\s+@method\\s+.*\\n?#';
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
        $docComment = $node->getDocComment();
        if (!$docComment instanceof \_PhpScoper2b44cb0c30af\PhpParser\Comment\Doc) {
            return [];
        }
        if (!\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::match($docComment->getText(), self::METHOD_TAG_REGEX)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
