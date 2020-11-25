<?php

declare (strict_types=1);
namespace Symplify\EasyTesting\Tests\PHPUnit\Behavior\DirectoryAssertableTrait;

use _PhpScoperdc8fbcd7c69d\PHPUnit\Framework\ExpectationFailedException;
use _PhpScoperdc8fbcd7c69d\PHPUnit\Framework\TestCase;
use Symplify\EasyTesting\PHPUnit\Behavior\DirectoryAssertableTrait;
use Throwable;
final class DirectoryAssertableTraitTest extends \_PhpScoperdc8fbcd7c69d\PHPUnit\Framework\TestCase
{
    use DirectoryAssertableTrait;
    public function testSuccess() : void
    {
        $this->assertDirectoryEquals(__DIR__ . '/Fixture/first_directory', __DIR__ . '/Fixture/second_directory');
    }
    public function testFail() : void
    {
        $throwable = null;
        try {
            $this->assertDirectoryEquals(__DIR__ . '/Fixture/first_directory', __DIR__ . '/Fixture/third_directory');
        } catch (\Throwable $throwable) {
        } finally {
            $this->assertInstanceOf(\_PhpScoperdc8fbcd7c69d\PHPUnit\Framework\ExpectationFailedException::class, $throwable);
        }
    }
}
