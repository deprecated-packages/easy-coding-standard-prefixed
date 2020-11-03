<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\NoShortNameRule;

use Iterator;
use _PhpScoper3d04c8135695\PHPStan\Rules\Rule;
use Symplify\CodingStandard\ObjectCalisthenics\Rules\NoShortNameRule;
use Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase;
final class NoShortNameRuleTest extends \Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase
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
        $emErrorMessage = \sprintf(\Symplify\CodingStandard\ObjectCalisthenics\Rules\NoShortNameRule::ERROR_MESSAGE, 'em', 3);
        $yeErrorMEssage = \sprintf(\Symplify\CodingStandard\ObjectCalisthenics\Rules\NoShortNameRule::ERROR_MESSAGE, 'YE', 3);
        (yield [__DIR__ . '/Fixture/ShortNamingClass.php', [[$emErrorMessage, 9], [$yeErrorMEssage, 11]]]);
        (yield [__DIR__ . '/Fixture/SkipId.php', []]);
    }
    protected function getRule() : \_PhpScoper3d04c8135695\PHPStan\Rules\Rule
    {
        return $this->getRuleFromConfig(\Symplify\CodingStandard\ObjectCalisthenics\Rules\NoShortNameRule::class, __DIR__ . '/config/configured_rule.neon');
    }
}
