<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Tests\Set\Psr12;

use Iterator;
use Symplify\EasyCodingStandardTester\Testing\AbstractCheckerTestCase;
use Symplify\EasyTesting\DataProvider\StaticFixtureFinder;
use Symplify\SmartFileSystem\SmartFileInfo;
final class Psr12Test extends \Symplify\EasyCodingStandardTester\Testing\AbstractCheckerTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(\Symplify\SmartFileSystem\SmartFileInfo $fileInfo) : void
    {
        $this->doTestFileInfo($fileInfo);
    }
    /**
     * @return Iterator<mixed, SmartFileInfo[]>
     */
    public function provideData() : \Iterator
    {
        return \Symplify\EasyTesting\DataProvider\StaticFixtureFinder::yieldDirectory(__DIR__ . '/Fixture');
    }
    protected function provideConfig() : string
    {
        return __DIR__ . '/../../../config/set/psr12.php';
    }
}
