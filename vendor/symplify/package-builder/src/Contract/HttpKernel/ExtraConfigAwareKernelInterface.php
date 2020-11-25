<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Contract\HttpKernel;

use _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\SmartFileSystem\SmartFileInfo;
interface ExtraConfigAwareKernelInterface extends \_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\KernelInterface
{
    /**
     * @param string[]|SmartFileInfo[] $configs
     */
    public function setConfigs(array $configs) : void;
}
