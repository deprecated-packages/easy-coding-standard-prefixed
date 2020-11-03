<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\SnippetFormatter\Tests\HeredocNowdoc;

use Iterator;
use _PhpScoper7f41430b5328\Symfony\Component\Console\Output\OutputInterface;
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
 * @requires PHP >= 7.3
 * For testing approach @see https://github.com/symplify/easy-testing
 */
final class Php73Test extends \Symplify\PackageBuilder\Tests\AbstractKernelTestCase
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
        $easyCodingStandardStyle->setVerbosity(\_PhpScoper7f41430b5328\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_QUIET);
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
        $changedContent = $this->snippetFormatter->format($inputAndExpectedFileInfos->getInputFileInfo(), \Symplify\EasyCodingStandard\SnippetFormatter\ValueObject\SnippetPattern::HERENOWDOC_SNIPPET_REGEX);
        $expectedFileContent = $inputAndExpectedFileInfos->getExpectedFileContent();
        $this->assertSame($changedContent, $expectedFileContent, $fixtureFileInfo->getRelativeFilePathFromCwd());
    }
    public function provideData() : \Iterator
    {
        return \Symplify\EasyTesting\DataProvider\StaticFixtureFinder::yieldDirectory(__DIR__ . '/FixturePhp73', '*.php.inc');
    }
}
