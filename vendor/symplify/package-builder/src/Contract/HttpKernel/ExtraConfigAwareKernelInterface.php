<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Contract\HttpKernel;

use _PhpScoperd32e35cfad84\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\SmartFileSystem\SmartFileInfo;
interface ExtraConfigAwareKernelInterface extends \_PhpScoperd32e35cfad84\Symfony\Component\HttpKernel\KernelInterface
{
    /**
     * @param string[]|SmartFileInfo[] $configs
     */
    public function setConfigs(array $configs) : void;
}
