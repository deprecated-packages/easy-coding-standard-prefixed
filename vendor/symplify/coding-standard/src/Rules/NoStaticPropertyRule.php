<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\StaticPropertyFetch;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\DependencyInjection\Container;
use _PhpScoper2b44cb0c30af\Psr\Container\ContainerInterface;
use _PhpScoper2b44cb0c30af\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\CodingStandard\PHPStan\Types\ContainsTypeAnalyser;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoStaticPropertyRule\NoStaticPropertyRuleTest
 */
final class NoStaticPropertyRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Do not use static property';
    /**
     * @var string[]
     */
    private const CACHEABLE_TYPES = [\_PhpScoper2b44cb0c30af\Psr\Container\ContainerInterface::class, \_PhpScoper2b44cb0c30af\PHPStan\DependencyInjection\Container::class, \_PhpScoper2b44cb0c30af\Symfony\Component\HttpKernel\KernelInterface::class];
    /**
     * @var ContainsTypeAnalyser
     */
    private $containsTypeAnalyser;
    public function __construct(\Symplify\CodingStandard\PHPStan\Types\ContainsTypeAnalyser $containsTypeAnalyser)
    {
        $this->containsTypeAnalyser = $containsTypeAnalyser;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\StaticPropertyFetch::class];
    }
    /**
     * @param StaticPropertyFetch $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if ($this->containsTypeAnalyser->containsExprTypes($node, $scope, self::CACHEABLE_TYPES)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
