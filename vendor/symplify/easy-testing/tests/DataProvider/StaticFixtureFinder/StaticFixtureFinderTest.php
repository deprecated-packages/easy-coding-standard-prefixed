<?php

declare (strict_types=1);
namespace Symplify\EasyTesting\Tests\DataProvider\StaticFixtureFinder;

use _PhpScoper10b1b2c5ca55\PHPUnit\Framework\TestCase;
use Symplify\EasyTesting\DataProvider\StaticFixtureFinder;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
final class StaticFixtureFinderTest extends \_PhpScoper10b1b2c5ca55\PHPUnit\Framework\TestCase
{
    public function testYieldDirectory() : void
    {
        $files = \Symplify\EasyTesting\DataProvider\StaticFixtureFinder::yieldDirectory(__DIR__ . '/Fixture', '*.php');
        $files = \iterator_to_array($files);
        $this->assertCount(1, $files);
    }
    public function testYieldDirectoryThrowException() : void
    {
        $files = \Symplify\EasyTesting\DataProvider\StaticFixtureFinder::yieldDirectory(__DIR__ . '/FixtureMulti', '*.php');
        $files = \iterator_to_array($files);
        $this->assertCount(1, $files);
    }
    public function testYieldDirectoryExclusivelyThrowException() : void
    {
        $this->expectException(\Symplify\SymplifyKernel\Exception\ShouldNotHappenException::class);
        $files = \Symplify\EasyTesting\DataProvider\StaticFixtureFinder::yieldDirectoryExclusively(__DIR__ . '/FixtureMulti', '*.php');
        // this is needed to call the iterator
        $fileInfos = \iterator_to_array($files);
    }
}
