<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\TooLongFunctionLikeRule;

use Iterator;
use _PhpScoper8de082cbb8c7\PHPStan\Rules\Rule;
use Symplify\CodingStandard\ObjectCalisthenics\Rules\TooLongFunctionLikeRule;
use Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase;
final class TooLongFunctionLikeRuleTest extends \Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase
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
        $errorMessage = \sprintf(\Symplify\CodingStandard\ObjectCalisthenics\Rules\TooLongFunctionLikeRule::ERROR_MESSAGE, 'Method', 16, 10);
        (yield [__DIR__ . '/Fixture/SuperLongMethod.php', [[$errorMessage, 9]]]);
        (yield [__DIR__ . '/Fixture/SkipShortMethod.php', []]);
    }
    protected function getRule() : \_PhpScoper8de082cbb8c7\PHPStan\Rules\Rule
    {
        return $this->getRuleFromConfig(\Symplify\CodingStandard\ObjectCalisthenics\Rules\TooLongFunctionLikeRule::class, __DIR__ . '/config/configured_rule.neon');
    }
}
