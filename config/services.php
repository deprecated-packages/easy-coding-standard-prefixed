<?php

declare (strict_types=1);
namespace _PhpScoperd8b0b9452568;

use PhpCsFixer\WhitespacesFixerConfig;
use _PhpScoperd8b0b9452568\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperd8b0b9452568\Symfony\Component\Console\Terminal;
use _PhpScoperd8b0b9452568\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\Bootstrap\NoCheckersLoaderReporter;
use Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle;
use Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyleFactory;
use Symplify\EasyCodingStandard\FixerRunner\WhitespacesFixerConfigFactory;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\SmartFileSystem\FileSystemFilter;
use Symplify\SmartFileSystem\FileSystemGuard;
use Symplify\SmartFileSystem\Finder\FinderSanitizer;
use Symplify\SmartFileSystem\Finder\SmartFinder;
use Symplify\SmartFileSystem\SmartFileSystem;
use function _PhpScoperd8b0b9452568\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperd8b0b9452568\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/services/services_cache.php');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\EasyCodingStandard\\', __DIR__ . '/../src')->exclude([
        // onyl for "bin/ecs" file, where containre does not exist yet
        __DIR__ . '/../src/Bundle',
        __DIR__ . '/../src/Bootstrap',
        __DIR__ . '/../src/DependencyInjection',
        __DIR__ . '/../src/HttpKernel',
        __DIR__ . '/../src/Exception',
        __DIR__ . '/../src/ValueObject',
    ]);
    $services->set(\_PhpScoperd8b0b9452568\Symfony\Component\Console\Terminal::class);
    $services->set(\Symplify\SmartFileSystem\FileSystemGuard::class);
    $services->set(\Symplify\SmartFileSystem\Finder\FinderSanitizer::class);
    $services->set(\Symplify\SmartFileSystem\SmartFileSystem::class);
    $services->set(\Symplify\SmartFileSystem\Finder\SmartFinder::class);
    $services->set(\Symplify\SmartFileSystem\FileSystemFilter::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperd8b0b9452568\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperd8b0b9452568\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle::class)->factory([\_PhpScoperd8b0b9452568\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyleFactory::class), 'create']);
    $services->set(\PhpCsFixer\WhitespacesFixerConfig::class)->factory([\_PhpScoperd8b0b9452568\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\EasyCodingStandard\FixerRunner\WhitespacesFixerConfigFactory::class), 'create']);
    $services->set(\Symplify\EasyCodingStandard\Bootstrap\NoCheckersLoaderReporter::class);
};
