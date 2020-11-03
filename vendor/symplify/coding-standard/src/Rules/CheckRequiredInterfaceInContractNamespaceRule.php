<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Interface_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Namespace_;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\CheckRequiredInterfaceInContractNamespaceRule\CheckRequiredInterfaceInContractNamespaceRuleTest
 */
final class CheckRequiredInterfaceInContractNamespaceRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Interface is required in Contract namespace';
    /**
     * @var string
     * @see https://regex101.com/r/kmrIG1/1
     */
    private const A_CONTRACT_NAMESPACE_REGEX = '#\\bContract\\b#';
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
        /** @var Namespace_|null */
        $namespace = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        if (!$namespace instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Namespace_) {
            return [];
        }
        $namespaceName = (string) $namespace->name;
        if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::match($namespaceName, self::A_CONTRACT_NAMESPACE_REGEX)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
