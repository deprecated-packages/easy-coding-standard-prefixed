<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\TooManyPropertiesRule;

use Iterator;
use _PhpScoper3d04c8135695\PHPStan\Rules\Rule;
use Symplify\CodingStandard\ObjectCalisthenics\Rules\TooManyPropertiesRule;
use Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase;
final class TooManyPropertiesRuleTest extends \Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase
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
        $message = \sprintf(\Symplify\CodingStandard\ObjectCalisthenics\Rules\TooManyPropertiesRule::ERROR_MESSAGE, 4, 3);
        (yield [__DIR__ . '/Fixture/TooManyProperties.php', [[$message, 7]]]);
    }
    protected function getRule() : \_PhpScoper3d04c8135695\PHPStan\Rules\Rule
    {
        return $this->getRuleFromConfig(\Symplify\CodingStandard\ObjectCalisthenics\Rules\TooManyPropertiesRule::class, __DIR__ . '/config/configured_rule.neon');
    }
}
