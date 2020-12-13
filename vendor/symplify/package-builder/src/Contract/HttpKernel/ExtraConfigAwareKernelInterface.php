<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Contract\HttpKernel;

use _PhpScoper4298f97f3cb3\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\SmartFileSystem\SmartFileInfo;
interface ExtraConfigAwareKernelInterface extends \_PhpScoper4298f97f3cb3\Symfony\Component\HttpKernel\KernelInterface
{
    /**
     * @param string[]|SmartFileInfo[] $configs
     */
    public function setConfigs(array $configs) : void;
}
