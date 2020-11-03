<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Identifier;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use _PhpScoper8de082cbb8c7\PHPStan\Type\ObjectType;
use _PhpScoper8de082cbb8c7\Symfony\Component\DependencyInjection\Loader\Configurator\ServicesConfigurator;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\CheckRequiredAutowireAutoconfigurePublicUsedInConfigServiceRule\CheckRequiredAutowireAutoconfigurePublicUsedInConfigServiceRuleTest
 */
final class CheckRequiredAutowireAutoconfigurePublicUsedInConfigServiceRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'autowire(), autoconfigure(), and public() are required in config service';
    /**
     * @var string[]
     */
    private const REQUIRED_METHODS = ['autowire', 'autoconfigure', 'public'];
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall::class];
    }
    /**
     * @param MethodCall $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $type = $scope->getType($node->var);
        if (!$type instanceof \_PhpScoper8de082cbb8c7\PHPStan\Type\ObjectType) {
            return [];
        }
        $className = $type->getClassName();
        if (!\is_a($className, \_PhpScoper8de082cbb8c7\Symfony\Component\DependencyInjection\Loader\Configurator\ServicesConfigurator::class, \true)) {
            return [];
        }
        /** @var Identifier $methodIdentifier */
        $methodIdentifier = $node->name;
        // ensure start with ->defaults()
        if ($methodIdentifier->toString() !== 'defaults') {
            return [];
        }
        $methodCallNames = $this->getMethodCallNames($node);
        foreach (self::REQUIRED_METHODS as $method) {
            if (!\in_array($method, $methodCallNames, \true)) {
                return [self::ERROR_MESSAGE];
            }
        }
        return [];
    }
    /**
     * @return string[]
     */
    private function getMethodCallNames(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall $methodCall) : array
    {
        $methodCalls = [];
        while ($methodCall) {
            if ($methodCall instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall && $methodCall->name instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Identifier) {
                $methodCalls[] = $methodCall->name->toString();
            }
            $methodCall = $methodCall->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        }
        return $methodCalls;
    }
}
