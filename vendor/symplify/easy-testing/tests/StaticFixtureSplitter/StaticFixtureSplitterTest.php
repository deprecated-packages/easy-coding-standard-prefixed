<?php

declare (strict_types=1);
namespace Symplify\EasyTesting\Tests\StaticFixtureSplitter;

use _PhpScopera189153e1f79\PHPUnit\Framework\TestCase;
use Symplify\EasyTesting\StaticFixtureSplitter;
use Symplify\SmartFileSystem\SmartFileInfo;
final class StaticFixtureSplitterTest extends \_PhpScopera189153e1f79\PHPUnit\Framework\TestCase
{
    public function test() : void
    {
        $fileInfo = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/Source/simple_fixture.php.inc');
        $inputAndExpected = \Symplify\EasyTesting\StaticFixtureSplitter::splitFileInfoToInputAndExpected($fileInfo);
        $this->assertSame('a' . \PHP_EOL, $inputAndExpected->getInput());
        $this->assertSame('b' . \PHP_EOL, $inputAndExpected->getExpected());
    }
    public function testSplitFileInfoToLocalInputAndExpected() : void
    {
        $fileInfo = new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/Source/file_and_value.php.inc');
        $inputFileInfoAndExpected = \Symplify\EasyTesting\StaticFixtureSplitter::splitFileInfoToLocalInputAndExpected($fileInfo);
        $realPath = $inputFileInfoAndExpected->getInputFileRealPath();
        $this->assertFileExists($realPath);
        $this->assertSame(15025, $inputFileInfoAndExpected->getExpected());
    }
}
