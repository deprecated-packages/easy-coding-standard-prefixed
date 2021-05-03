<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\Tests\Console\AbstractSymplifyConsoleApplication;

use _PhpScoper7239e3eaf11a\Symfony\Component\Console\Application;
use Symplify\PackageBuilder\Testing\AbstractKernelTestCase;
use Symplify\SymplifyKernel\Tests\HttpKernel\OnlyForTestsKernel;
final class AutowiredConsoleApplicationTest extends AbstractKernelTestCase
{
    protected function setUp() : void
    {
        $this->bootKernel(OnlyForTestsKernel::class);
    }
    public function test() : void
    {
        $application = $this->getService(Application::class);
        $this->assertInstanceOf(Application::class, $application);
    }
}
