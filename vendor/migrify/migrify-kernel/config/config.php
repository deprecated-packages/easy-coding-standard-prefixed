<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b;

use _PhpScoper64a921a5401b\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory;
use _PhpScoper64a921a5401b\Symfony\Component\Console\Application;
use _PhpScoper64a921a5401b\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper64a921a5401b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use Symplify\SmartFileSystem\FileSystemFilter;
use Symplify\SmartFileSystem\FileSystemGuard;
use Symplify\SmartFileSystem\Finder\FinderSanitizer;
use Symplify\SmartFileSystem\Finder\SmartFinder;
use Symplify\SmartFileSystem\SmartFileSystem;
use function _PhpScoper64a921a5401b\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper64a921a5401b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    // console application with commands
    $services->set(\_PhpScoper64a921a5401b\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory::class);
    // symfony style
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper64a921a5401b\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper64a921a5401b\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    // filesystem
    $services->set(\Symplify\SmartFileSystem\Finder\FinderSanitizer::class);
    $services->set(\Symplify\SmartFileSystem\SmartFileSystem::class);
    $services->set(\Symplify\SmartFileSystem\Finder\SmartFinder::class);
    $services->set(\Symplify\SmartFileSystem\FileSystemGuard::class);
    $services->set(\Symplify\SmartFileSystem\FileSystemFilter::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
