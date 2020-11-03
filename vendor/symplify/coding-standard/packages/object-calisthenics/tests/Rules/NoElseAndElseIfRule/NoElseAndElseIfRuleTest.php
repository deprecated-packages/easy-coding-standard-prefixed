<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\NoElseAndElseIfRule;

use Iterator;
use _PhpScoper2b44cb0c30af\PHPStan\Rules\Rule;
use Symplify\CodingStandard\ObjectCalisthenics\Rules\NoElseAndElseIfRule;
use Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase;
final class NoElseAndElseIfRuleTest extends \Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase
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
        (yield [__DIR__ . '/Fixture/SomeElse.php', [[\Symplify\CodingStandard\ObjectCalisthenics\Rules\NoElseAndElseIfRule::MESSAGE, 13]]]);
    }
    protected function getRule() : \_PhpScoper2b44cb0c30af\PHPStan\Rules\Rule
    {
        return $this->getRuleFromConfig(\Symplify\CodingStandard\ObjectCalisthenics\Rules\NoElseAndElseIfRule::class, __DIR__ . '/../../../../../packages/object-calisthenics/config/object-calisthenics-rules.neon');
    }
}
