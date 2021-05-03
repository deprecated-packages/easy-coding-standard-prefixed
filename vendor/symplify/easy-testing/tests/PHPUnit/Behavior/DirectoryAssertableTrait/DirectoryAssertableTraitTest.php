<?php

declare (strict_types=1);
namespace Symplify\EasyTesting\Tests\PHPUnit\Behavior\DirectoryAssertableTrait;

use _PhpScoper91c59a2f52e1\PHPUnit\Framework\ExpectationFailedException;
use _PhpScoper91c59a2f52e1\PHPUnit\Framework\TestCase;
use Symplify\EasyTesting\PHPUnit\Behavior\DirectoryAssertableTrait;
use Throwable;
final class DirectoryAssertableTraitTest extends TestCase
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
        } catch (Throwable $throwable) {
        } finally {
            $this->assertInstanceOf(ExpectationFailedException::class, $throwable);
        }
    }
}
