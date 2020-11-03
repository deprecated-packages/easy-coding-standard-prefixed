<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Tests\Application;

use Symplify\EasyCodingStandard\Application\EasyCodingStandardApplication;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\PackageBuilder\Tests\AbstractKernelTestCase;
final class ApplicationTest extends \Symplify\PackageBuilder\Tests\AbstractKernelTestCase
{
    /**
     * @var EasyCodingStandardApplication
     */
    private $easyCodingStandardApplication;
    protected function setUp() : void
    {
        $this->bootKernel(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class);
        $this->easyCodingStandardApplication = self::$container->get(\Symplify\EasyCodingStandard\Application\EasyCodingStandardApplication::class);
    }
    /**
     * @doesNotPerformAssertions
     */
    public function testRun() : void
    {
        $this->easyCodingStandardApplication->run();
    }
}
