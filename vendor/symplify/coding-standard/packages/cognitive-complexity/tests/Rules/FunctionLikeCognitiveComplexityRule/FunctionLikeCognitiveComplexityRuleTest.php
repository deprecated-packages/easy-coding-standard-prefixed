<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\CognitiveComplexity\Tests\Rules\FunctionLikeCognitiveComplexityRule;

use Iterator;
use _PhpScoper8de082cbb8c7\PHPStan\Rules\Rule;
use Symplify\CodingStandard\CognitiveComplexity\Rules\FunctionLikeCognitiveComplexityRule;
use Symplify\CodingStandard\CognitiveComplexity\Tests\Rules\FunctionLikeCognitiveComplexityRule\Source\ClassMethodOverComplicated;
use Symplify\CodingStandard\CognitiveComplexity\Tests\Rules\FunctionLikeCognitiveComplexityRule\Source\VideoRepository;
use Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase;
final class FunctionLikeCognitiveComplexityRuleTest extends \Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase
{
    /**
     * @dataProvider provideDataForTest()
     */
    public function test(string $filePath, array $expectedErrorMessagesWithLines) : void
    {
        $this->analyse([$filePath], $expectedErrorMessagesWithLines);
    }
    public function provideDataForTest() : \Iterator
    {
        $errorMessage = \sprintf(\Symplify\CodingStandard\CognitiveComplexity\Rules\FunctionLikeCognitiveComplexityRule::ERROR_MESSAGE, 'someFunction()', 9, 8);
        (yield [__DIR__ . '/Source/function.php.inc', [[$errorMessage, 3]]]);
        $errorMessage = \sprintf(\Symplify\CodingStandard\CognitiveComplexity\Rules\FunctionLikeCognitiveComplexityRule::ERROR_MESSAGE, \Symplify\CodingStandard\CognitiveComplexity\Tests\Rules\FunctionLikeCognitiveComplexityRule\Source\ClassMethodOverComplicated::class . '::someMethod()', 9, 8);
        (yield [__DIR__ . '/Source/ClassMethodOverComplicated.php', [[$errorMessage, 7]]]);
        $errorMessage = \sprintf(\Symplify\CodingStandard\CognitiveComplexity\Rules\FunctionLikeCognitiveComplexityRule::ERROR_MESSAGE, \Symplify\CodingStandard\CognitiveComplexity\Tests\Rules\FunctionLikeCognitiveComplexityRule\Source\VideoRepository::class . '::findBySlug()', 9, 8);
        (yield [__DIR__ . '/Source/VideoRepository.php', [[$errorMessage, 12]]]);
    }
    protected function getRule() : \_PhpScoper8de082cbb8c7\PHPStan\Rules\Rule
    {
        return $this->getRuleFromConfig(\Symplify\CodingStandard\CognitiveComplexity\Rules\FunctionLikeCognitiveComplexityRule::class, __DIR__ . '/../../../../../packages/cognitive-complexity/config/cognitive-complexity-rules.neon');
    }
}
