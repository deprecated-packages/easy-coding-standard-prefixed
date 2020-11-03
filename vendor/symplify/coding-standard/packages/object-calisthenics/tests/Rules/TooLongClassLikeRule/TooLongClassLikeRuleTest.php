<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\TooLongClassLikeRule;

use Iterator;
use _PhpScoper8de082cbb8c7\PHPStan\Rules\Rule;
use Symplify\CodingStandard\ObjectCalisthenics\Rules\TooLongClassLikeRule;
use Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase;
final class TooLongClassLikeRuleTest extends \Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase
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
        $errorMessage = \sprintf(\Symplify\CodingStandard\ObjectCalisthenics\Rules\TooLongClassLikeRule::ERROR_MESSAGE, 'Class', 13, 10);
        (yield [__DIR__ . '/Fixture/SuperLongClass.php', [[$errorMessage, 7]]]);
    }
    protected function getRule() : \_PhpScoper8de082cbb8c7\PHPStan\Rules\Rule
    {
        return $this->getRuleFromConfig(\Symplify\CodingStandard\ObjectCalisthenics\Rules\TooLongClassLikeRule::class, __DIR__ . '/config/configured_rule.neon');
    }
}
