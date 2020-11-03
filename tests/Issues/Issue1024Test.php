<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Tests\Issues;

use Iterator;
use Symplify\EasyCodingStandardTester\Testing\AbstractCheckerTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;
/**
 * @see https://github.com/symplify/symplify/issues/1024
 */
final class Issue1024Test extends \Symplify\EasyCodingStandardTester\Testing\AbstractCheckerTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(\Symplify\SmartFileSystem\SmartFileInfo $fileInfo) : void
    {
        $this->doTestFileInfo($fileInfo);
    }
    public function provideData() : \Iterator
    {
        (yield [new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/Fixture/fixture1024.php.inc'), new \Symplify\SmartFileSystem\SmartFileInfo(__DIR__ . '/Fixture/fixture1024_2.php.inc')]);
    }
    protected function provideConfig() : string
    {
        return __DIR__ . '/config/config1024.php';
    }
}
