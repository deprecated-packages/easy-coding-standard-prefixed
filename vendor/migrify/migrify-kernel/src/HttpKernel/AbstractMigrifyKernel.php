<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc\Migrify\MigrifyKernel\HttpKernel;

use _PhpScoper2fe14d6302bc\Migrify\MigrifyKernel\Bundle\MigrifyKernelBundle;
use _PhpScoper2fe14d6302bc\Nette\Utils\Strings;
use _PhpScoper2fe14d6302bc\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use _PhpScoper2fe14d6302bc\Symfony\Component\HttpKernel\Kernel;
abstract class AbstractMigrifyKernel extends \_PhpScoper2fe14d6302bc\Symfony\Component\HttpKernel\Kernel
{
    public function getUniqueKernelHash() : string
    {
        $finalKernelClass = static::class;
        $shortClassName = (string) \_PhpScoper2fe14d6302bc\Nette\Utils\Strings::after($finalKernelClass, '\\', -1);
        return $this->camelCaseToGlue($shortClassName, '_');
    }
    public function getCacheDir() : string
    {
        return \sys_get_temp_dir() . '/' . $this->getUniqueKernelHash();
    }
    public function getLogDir() : string
    {
        return \sys_get_temp_dir() . '/' . $this->getUniqueKernelHash() . '_log';
    }
    /**
     * @return BundleInterface[]
     */
    public function registerBundles() : iterable
    {
        return [new \_PhpScoper2fe14d6302bc\Migrify\MigrifyKernel\Bundle\MigrifyKernelBundle()];
    }
    private function camelCaseToGlue(string $input, string $glue) : string
    {
        if ($input === \strtolower($input)) {
            return $input;
        }
        $matches = \_PhpScoper2fe14d6302bc\Nette\Utils\Strings::matchAll($input, '#([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)#');
        $parts = [];
        foreach ($matches as $match) {
            $parts[] = $match[0] === \strtoupper($match[0]) ? \strtolower($match[0]) : \lcfirst($match[0]);
        }
        return \implode($glue, $parts);
    }
}
