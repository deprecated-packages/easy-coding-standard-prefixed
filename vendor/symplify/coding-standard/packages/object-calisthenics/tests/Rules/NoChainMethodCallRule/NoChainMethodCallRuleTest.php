<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\NoChainMethodCallRule;

use Iterator;
use _PhpScoper8de082cbb8c7\PHPStan\Rules\Rule;
use Symplify\CodingStandard\ObjectCalisthenics\Rules\NoChainMethodCallRule;
use Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase;
final class NoChainMethodCallRuleTest extends \Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function testRule(string $filePath, array $expectedErrorMessagesWithLines) : void
    {
        $this->analyse([$filePath], $expectedErrorMessagesWithLines);
    }
    public function provideData() : \Iterator
    {
        (yield [__DIR__ . '/Fixture/ChainMethodCall.php', [[\Symplify\CodingStandard\ObjectCalisthenics\Rules\NoChainMethodCallRule::ERROR_MESSAGE, 11]]]);
    }
    protected function getRule() : \_PhpScoper8de082cbb8c7\PHPStan\Rules\Rule
    {
        return $this->getRuleFromConfig(\Symplify\CodingStandard\ObjectCalisthenics\Rules\NoChainMethodCallRule::class, __DIR__ . '/config/standalone_rule.neon');
    }
}
