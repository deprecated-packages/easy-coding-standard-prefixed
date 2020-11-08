<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Tests\DependencyInjection;

use Symplify\EasyCodingStandard\Configuration\Exception\ConflictingCheckersLoadedException;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\PackageBuilder\Testing\AbstractKernelTestCase;
final class ConflictingCheckersTest extends \Symplify\PackageBuilder\Testing\AbstractKernelTestCase
{
    public function test() : void
    {
        $this->expectException(\Symplify\EasyCodingStandard\Configuration\Exception\ConflictingCheckersLoadedException::class);
        $this->bootKernelWithConfigs(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class, [__DIR__ . '/ConflictingCheckersSource/config.php']);
    }
}
