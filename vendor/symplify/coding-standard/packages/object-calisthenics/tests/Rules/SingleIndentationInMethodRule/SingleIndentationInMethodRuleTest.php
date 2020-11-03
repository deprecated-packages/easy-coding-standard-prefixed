<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\SingleIndentationInMethodRule;

use Iterator;
use _PhpScoper8de082cbb8c7\PHPStan\Rules\Rule;
use Symplify\CodingStandard\ObjectCalisthenics\Rules\SingleIndentationInMethodRule;
use Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase;
final class SingleIndentationInMethodRuleTest extends \Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase
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
        $errorMessage = \sprintf(\Symplify\CodingStandard\ObjectCalisthenics\Rules\SingleIndentationInMethodRule::ERROR_MESSAGE, 1);
        (yield [__DIR__ . '/Fixture/ManyIndentations.php', [[$errorMessage, 9]]]);
        (yield [__DIR__ . '/Fixture/SkipSingleIndentation.php', []]);
    }
    protected function getRule() : \_PhpScoper8de082cbb8c7\PHPStan\Rules\Rule
    {
        return $this->getRuleFromConfig(\Symplify\CodingStandard\ObjectCalisthenics\Rules\SingleIndentationInMethodRule::class, __DIR__ . '/../../../config/object-calisthenics-rules.neon');
    }
}
