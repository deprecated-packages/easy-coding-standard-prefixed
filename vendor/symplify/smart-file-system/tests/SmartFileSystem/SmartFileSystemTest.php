<?php

declare (strict_types=1);
namespace Symplify\SmartFileSystem\Tests\SmartFileSystem;

use _PhpScoper8a8080b03ed6\PHPUnit\Framework\TestCase;
use Symplify\SmartFileSystem\SmartFileInfo;
use Symplify\SmartFileSystem\SmartFileSystem;
final class SmartFileSystemTest extends TestCase
{
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;
    protected function setUp() : void
    {
        $this->smartFileSystem = new SmartFileSystem();
    }
    public function testReadFileToSmartFileInfo() : void
    {
        $readFileToSmartFileInfo = $this->smartFileSystem->readFileToSmartFileInfo(__DIR__ . '/Source/file.txt');
        $this->assertInstanceof(SmartFileInfo::class, $readFileToSmartFileInfo);
    }
}
