<?php

declare (strict_types=1);
namespace Symplify\EasyTesting\Tests\PHPUnit\Behavior\DirectoryAssertableTrait;

use _PhpScoperba24099fc6fd\PHPUnit\Framework\ExpectationFailedException;
use _PhpScoperba24099fc6fd\PHPUnit\Framework\TestCase;
use Symplify\EasyTesting\PHPUnit\Behavior\DirectoryAssertableTrait;
use Throwable;
final class DirectoryAssertableTraitTest extends \_PhpScoperba24099fc6fd\PHPUnit\Framework\TestCase
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
            $this->assertInstanceOf(\_PhpScoperba24099fc6fd\PHPUnit\Framework\ExpectationFailedException::class, $throwable);
        }
    }
}
