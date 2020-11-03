<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Contract\HttpKernel;

use _PhpScopercf327c47dfc5\Symfony\Component\HttpKernel\KernelInterface;
interface ExtraConfigAwareKernelInterface extends \_PhpScopercf327c47dfc5\Symfony\Component\HttpKernel\KernelInterface
{
    /**
     * @param string[] $configs
     */
    public function setConfigs(array $configs) : void;
}
