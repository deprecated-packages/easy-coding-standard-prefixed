<?php

declare (strict_types=1);
namespace _PhpScoper48800f361566;

use _PhpScoper48800f361566\Migrify\MigrifyKernel\Console\CommandAwareConsoleApplication;
use _PhpScoper48800f361566\Symfony\Component\Console\Application;
use _PhpScoper48800f361566\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper48800f361566\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use Symplify\SmartFileSystem\FileSystemFilter;
use Symplify\SmartFileSystem\FileSystemGuard;
use Symplify\SmartFileSystem\Finder\FinderSanitizer;
use Symplify\SmartFileSystem\Finder\SmartFinder;
use Symplify\SmartFileSystem\SmartFileSystem;
use function _PhpScoper48800f361566\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper48800f361566\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    // console application with commands
    $services->set(\_PhpScoper48800f361566\Migrify\MigrifyKernel\Console\CommandAwareConsoleApplication::class)->public();
    $services->alias(\_PhpScoper48800f361566\Symfony\Component\Console\Application::class, \_PhpScoper48800f361566\Migrify\MigrifyKernel\Console\CommandAwareConsoleApplication::class);
    // symfony style
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper48800f361566\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper48800f361566\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    // filesystem
    $services->set(\Symplify\SmartFileSystem\Finder\FinderSanitizer::class);
    $services->set(\Symplify\SmartFileSystem\SmartFileSystem::class);
    $services->set(\Symplify\SmartFileSystem\Finder\SmartFinder::class);
    $services->set(\Symplify\SmartFileSystem\FileSystemGuard::class);
    $services->set(\Symplify\SmartFileSystem\FileSystemFilter::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
