<?php

declare (strict_types=1);
namespace _PhpScoper5ade29b97028\Migrify\MigrifyKernel\Bootstrap;

use _PhpScoper5ade29b97028\Migrify\MigrifyKernel\Exception\BootException;
use _PhpScoper5ade29b97028\Symfony\Component\Console\Application;
use _PhpScoper5ade29b97028\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\Console\Input\InputDetector;
use Symplify\PackageBuilder\Console\ShellCode;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Contract\HttpKernel\ExtraConfigAwareKernelInterface;
use Throwable;
final class KernelBootAndApplicationRun
{
    /**
     * @var class-string
     */
    private $kernelClass;
    /**
     * @var string[]
     */
    private $extraConfigs = [];
    /**
     * @param class-string $kernelClass
     * @param string[] $extraConfigs
     */
    public function __construct(string $kernelClass, array $extraConfigs = [])
    {
        $this->setKernelClass($kernelClass);
        $this->extraConfigs = $extraConfigs;
    }
    public function run() : void
    {
        try {
            $this->booKernelAndRunApplication();
        } catch (\Throwable $throwable) {
            $symfonyStyleFactory = new \Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory();
            $symfonyStyle = $symfonyStyleFactory->create();
            $symfonyStyle->error($throwable->getMessage());
            exit(\Symplify\PackageBuilder\Console\ShellCode::ERROR);
        }
    }
    private function createKernel() : \_PhpScoper5ade29b97028\Symfony\Component\HttpKernel\KernelInterface
    {
        // random has is needed, so cache is invalidated and changes from config are loaded
        $environment = 'prod' . \random_int(1, 100000);
        $kernelClass = $this->kernelClass;
        $kernel = new $kernelClass($environment, \Symplify\PackageBuilder\Console\Input\InputDetector::isDebug());
        $this->setExtraConfigs($kernel, $kernelClass);
        return $kernel;
    }
    private function booKernelAndRunApplication() : void
    {
        $kernel = $this->createKernel();
        if ($kernel instanceof \Symplify\PackageBuilder\Contract\HttpKernel\ExtraConfigAwareKernelInterface && $this->extraConfigs !== []) {
            $kernel->setConfigs($this->extraConfigs);
        }
        $kernel->boot();
        $container = $kernel->getContainer();
        /** @var Application|null $application */
        $application = $container->get(\_PhpScoper5ade29b97028\Symfony\Component\Console\Application::class);
        if ($application === null) {
            $message = \sprintf('Application class %s was not found. Make it public in the config.', \_PhpScoper5ade29b97028\Symfony\Component\Console\Application::class);
            throw new \_PhpScoper5ade29b97028\Migrify\MigrifyKernel\Exception\BootException($message);
        }
        exit($application->run());
    }
    private function setExtraConfigs(\_PhpScoper5ade29b97028\Symfony\Component\HttpKernel\KernelInterface $kernel, string $kernelClass) : void
    {
        if ($this->extraConfigs === []) {
            return;
        }
        if (\is_a($kernel, \Symplify\PackageBuilder\Contract\HttpKernel\ExtraConfigAwareKernelInterface::class, \true)) {
            /** @var ExtraConfigAwareKernelInterface $kernel */
            $kernel->setConfigs($this->extraConfigs);
        } else {
            $message = \sprintf('Extra configs are set, but the "%s" class is missing "%s" interface', $kernelClass, \Symplify\PackageBuilder\Contract\HttpKernel\ExtraConfigAwareKernelInterface::class);
            throw new \_PhpScoper5ade29b97028\Migrify\MigrifyKernel\Exception\BootException($message);
        }
    }
    /**
     * @param class-string $kernelClass
     */
    private function setKernelClass(string $kernelClass) : void
    {
        if (!\is_a($kernelClass, \_PhpScoper5ade29b97028\Symfony\Component\HttpKernel\KernelInterface::class, \true)) {
            $message = \sprintf('Class "%s" must by type of "%s"', $kernelClass, \_PhpScoper5ade29b97028\Symfony\Component\HttpKernel\KernelInterface::class);
            throw new \_PhpScoper5ade29b97028\Migrify\MigrifyKernel\Exception\BootException($message);
        }
        $this->kernelClass = $kernelClass;
    }
}
