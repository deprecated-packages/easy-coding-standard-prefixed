<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\CognitiveComplexity\Tests\AstCognitiveComplexityAnalyzer;

use Iterator;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Function_;
use _PhpScoper2b44cb0c30af\PhpParser\NodeFinder;
use _PhpScoper2b44cb0c30af\PhpParser\ParserFactory;
use _PhpScoper2b44cb0c30af\PHPStan\DependencyInjection\ContainerFactory;
use _PhpScoper2b44cb0c30af\PHPUnit\Framework\TestCase;
use Symplify\CodingStandard\CognitiveComplexity\AstCognitiveComplexityAnalyzer;
use Symplify\EasyTesting\DataProvider\StaticFixtureFinder;
use Symplify\EasyTesting\StaticFixtureSplitter;
use Symplify\SmartFileSystem\SmartFileInfo;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
final class AstCognitiveComplexityAnalyzerTest extends \_PhpScoper2b44cb0c30af\PHPUnit\Framework\TestCase
{
    /**
     * @var AstCognitiveComplexityAnalyzer
     */
    private $astCognitiveComplexityAnalyzer;
    protected function setUp() : void
    {
        $phpstanContainerFactory = new \_PhpScoper2b44cb0c30af\PHPStan\DependencyInjection\ContainerFactory(\getcwd());
        $tempFile = \sys_get_temp_dir() . '/_symplify_cogntive_complexity_test';
        $container = $phpstanContainerFactory->create($tempFile, [__DIR__ . '/../../config/cognitive-complexity-rules.neon'], []);
        $this->astCognitiveComplexityAnalyzer = $container->getByType(\Symplify\CodingStandard\CognitiveComplexity\AstCognitiveComplexityAnalyzer::class);
    }
    /**
     * @dataProvider provideTokensAndExpectedCognitiveComplexity()
     */
    public function test(\Symplify\SmartFileSystem\SmartFileInfo $fixtureFileInfo) : void
    {
        $inputAndExpected = \Symplify\EasyTesting\StaticFixtureSplitter::splitFileInfoToInputAndExpected($fixtureFileInfo);
        $functionLike = $this->parseFileToFistFunctionLike($inputAndExpected->getInput());
        if ($functionLike === null) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        $cognitiveComplexity = $this->astCognitiveComplexityAnalyzer->analyzeFunctionLike($functionLike);
        $this->assertSame((int) $inputAndExpected->getExpected(), $cognitiveComplexity);
    }
    /**
     * Here are tested all examples from https://www.sonarsource.com/docs/CognitiveComplexity.pdf
     */
    public function provideTokensAndExpectedCognitiveComplexity() : \Iterator
    {
        return \Symplify\EasyTesting\DataProvider\StaticFixtureFinder::yieldDirectory(__DIR__ . '/Source');
    }
    /**
     * @return ClassMethod|Function_
     */
    private function parseFileToFistFunctionLike(string $fileContent) : ?\_PhpScoper2b44cb0c30af\PhpParser\Node
    {
        $parserFactory = new \_PhpScoper2b44cb0c30af\PhpParser\ParserFactory();
        $parser = $parserFactory->create(\_PhpScoper2b44cb0c30af\PhpParser\ParserFactory::ONLY_PHP7);
        $nodes = $parser->parse($fileContent);
        $nodeFinder = new \_PhpScoper2b44cb0c30af\PhpParser\NodeFinder();
        return $nodeFinder->findFirst((array) $nodes, function (\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : bool {
            return $node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod || $node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Function_;
        });
    }
}
