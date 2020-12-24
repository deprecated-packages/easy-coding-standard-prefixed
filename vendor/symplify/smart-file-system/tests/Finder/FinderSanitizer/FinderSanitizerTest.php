<?php

declare (strict_types=1);
namespace Symplify\SmartFileSystem\Tests\Finder\FinderSanitizer;

use _PhpScopera37d6fb0b1ab\Nette\Utils\Finder as NetteFinder;
use _PhpScopera37d6fb0b1ab\Nette\Utils\Strings;
use _PhpScopera37d6fb0b1ab\PHPUnit\Framework\TestCase;
use SplFileInfo;
use _PhpScopera37d6fb0b1ab\Symfony\Component\Finder\Finder as SymfonyFinder;
use _PhpScopera37d6fb0b1ab\Symfony\Component\Finder\SplFileInfo as SymfonySplFileInfo;
use Symplify\SmartFileSystem\Finder\FinderSanitizer;
use Symplify\SmartFileSystem\SmartFileInfo;
final class FinderSanitizerTest extends \_PhpScopera37d6fb0b1ab\PHPUnit\Framework\TestCase
{
    /**
     * @var FinderSanitizer
     */
    private $finderSanitizer;
    protected function setUp() : void
    {
        $this->finderSanitizer = new \Symplify\SmartFileSystem\Finder\FinderSanitizer();
    }
    public function testValidTypes() : void
    {
        $files = [new \SplFileInfo(__DIR__ . '/Source/MissingFile.php')];
        $this->assertCount(0, $this->finderSanitizer->sanitize($files));
    }
    public function testSymfonyFinder() : void
    {
        $symfonyFinder = \_PhpScopera37d6fb0b1ab\Symfony\Component\Finder\Finder::create()->files()->in(__DIR__ . '/Source');
        $fileInfos = \iterator_to_array($symfonyFinder->getIterator());
        $this->assertCount(2, $fileInfos);
        $files = $this->finderSanitizer->sanitize($symfonyFinder);
        $this->assertCount(2, $files);
        $this->assertFilesEqualFixtureFiles($files[0], $files[1]);
    }
    public function testNetteFinder() : void
    {
        $netteFinder = \_PhpScopera37d6fb0b1ab\Nette\Utils\Finder::findFiles('*')->from(__DIR__ . '/Source');
        $fileInfos = \iterator_to_array($netteFinder->getIterator());
        $this->assertCount(2, $fileInfos);
        $files = $this->finderSanitizer->sanitize($netteFinder);
        $this->assertCount(2, $files);
        $this->assertFilesEqualFixtureFiles($files[0], $files[1]);
    }
    /**
     * On different OS the order of the two files can differ, only symfony finder would have a sort function, nette
     * finder does not. so we test if the correct files are there but ignore the order.
     */
    private function assertFilesEqualFixtureFiles(\Symplify\SmartFileSystem\SmartFileInfo $firstSmartFileInfo, \Symplify\SmartFileSystem\SmartFileInfo $secondSmartFileInfo) : void
    {
        $this->assertFileIsFromFixtureDirAndHasCorrectClass($firstSmartFileInfo);
        $this->assertFileIsFromFixtureDirAndHasCorrectClass($secondSmartFileInfo);
        // order agnostic file check
        $this->assertTrue(\_PhpScopera37d6fb0b1ab\Nette\Utils\Strings::endsWith($firstSmartFileInfo->getRelativeFilePath(), 'NestedDirectory/FileWithClass.php') && \_PhpScopera37d6fb0b1ab\Nette\Utils\Strings::endsWith($secondSmartFileInfo->getRelativeFilePath(), 'NestedDirectory/EmptyFile.php') || \_PhpScopera37d6fb0b1ab\Nette\Utils\Strings::endsWith($firstSmartFileInfo->getRelativeFilePath(), 'NestedDirectory/EmptyFile.php') && \_PhpScopera37d6fb0b1ab\Nette\Utils\Strings::endsWith($secondSmartFileInfo->getRelativeFilePath(), 'NestedDirectory/FileWithClass.php'));
    }
    private function assertFileIsFromFixtureDirAndHasCorrectClass(\Symplify\SmartFileSystem\SmartFileInfo $smartFileInfo) : void
    {
        $this->assertInstanceOf(\_PhpScopera37d6fb0b1ab\Symfony\Component\Finder\SplFileInfo::class, $smartFileInfo);
        $this->assertStringEndsWith('NestedDirectory', $smartFileInfo->getRelativeDirectoryPath());
    }
}
