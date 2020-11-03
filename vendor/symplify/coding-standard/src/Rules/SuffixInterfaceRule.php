<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Interface_;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\SuffixInterfaceRule\SuffixInterfaceRuleTest
 */
final class SuffixInterfaceRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Interface name "%s" must be suffixed with "Interface"';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Interface_::class];
    }
    /**
     * @param Interface_ $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        $interfaceName = (string) $node->name;
        if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::endsWith($interfaceName, 'Interface')) {
            return [];
        }
        return [\sprintf(self::ERROR_MESSAGE, $interfaceName)];
    }
}
