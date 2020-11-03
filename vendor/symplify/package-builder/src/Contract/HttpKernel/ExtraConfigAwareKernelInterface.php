<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Contract\HttpKernel;

use _PhpScoper2b44cb0c30af\Symfony\Component\HttpKernel\KernelInterface;
interface ExtraConfigAwareKernelInterface extends \_PhpScoper2b44cb0c30af\Symfony\Component\HttpKernel\KernelInterface
{
    /**
     * @param string[] $configs
     */
    public function setConfigs(array $configs) : void;
}
