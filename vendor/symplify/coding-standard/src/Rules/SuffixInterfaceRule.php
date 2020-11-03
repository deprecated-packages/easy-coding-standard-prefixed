<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\Nette\Utils\Strings;
use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Interface_;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
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
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Interface_::class];
    }
    /**
     * @param Interface_ $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $interfaceName = (string) $node->name;
        if (\_PhpScoper8de082cbb8c7\Nette\Utils\Strings::endsWith($interfaceName, 'Interface')) {
            return [];
        }
        return [\sprintf(self::ERROR_MESSAGE, $interfaceName)];
    }
}
