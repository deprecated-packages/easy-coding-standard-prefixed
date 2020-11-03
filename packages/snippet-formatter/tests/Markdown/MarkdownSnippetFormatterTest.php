<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\SnippetFormatter\Tests\Markdown;

use Iterator;
use _PhpScoper61bdb485188f\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\Configuration\Configuration;
use Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\EasyCodingStandard\SnippetFormatter\Formatter\SnippetFormatter;
use Symplify\EasyCodingStandard\SnippetFormatter\ValueObject\SnippetPattern;
use Symplify\EasyTesting\DataProvider\StaticFixtureFinder;
use Symplify\EasyTesting\StaticFixtureSplitter;
use Symplify\PackageBuilder\Tests\AbstractKernelTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;
/**
 * For testing approach @see https://github.com/symplify/easy-testing
 */
final class MarkdownSnippetFormatterTest extends \Symplify\PackageBuilder\Tests\AbstractKernelTestCase
{
    /**
     * @var SnippetFormatter
     */
    private $snippetFormatter;
    protected function setUp() : void
    {
        self::bootKernelWithConfigs(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class, [__DIR__ . '/config/array_fixer.php']);
        $this->snippetFormatter = self::$container->get(\Symplify\EasyCodingStandard\SnippetFormatter\Formatter\SnippetFormatter::class);
        /** @var EasyCodingStandardStyle $easyCodingStandardStyle */
        $easyCodingStandardStyle = self::$container->get(\Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle::class);
        $easyCodingStandardStyle->setVerbosity(\_PhpScoper61bdb485188f\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_QUIET);
        // enable fixing
        /** @var Configuration $configuration */
        $configuration = self::$container->get(\Symplify\EasyCodingStandard\Configuration\Configuration::class);
        $configuration->enableFixing();
    }
    /**
     * @dataProvider provideData()
     */
    public function test(\Symplify\SmartFileSystem\SmartFileInfo $fixtureFileInfo) : void
    {
        $inputAndExpectedFileInfos = \Symplify\EasyTesting\StaticFixtureSplitter::splitFileInfoToLocalInputAndExpectedFileInfos($fixtureFileInfo);
        $changedContent = $this->snippetFormatter->format($inputAndExpectedFileInfos->getInputFileInfo(), \Symplify\EasyCodingStandard\SnippetFormatter\ValueObject\SnippetPattern::MARKDOWN_PHP_SNIPPET_REGEX);
        $expectedFileContent = $inputAndExpectedFileInfos->getExpectedFileContent();
        $this->assertSame($expectedFileContent, $changedContent, $fixtureFileInfo->getRelativeFilePathFromCwd());
    }
    public function provideData() : \Iterator
    {
        return \Symplify\EasyTesting\DataProvider\StaticFixtureFinder::yieldDirectory(__DIR__ . '/Fixture', '*.md');
    }
}
