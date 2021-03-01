<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Contract\HttpKernel;

use _PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\SmartFileSystem\SmartFileInfo;
interface ExtraConfigAwareKernelInterface extends \_PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\KernelInterface
{
    /**
     * @param string[]|SmartFileInfo[] $configs
     */
    public function setConfigs(array $configs) : void;
}
