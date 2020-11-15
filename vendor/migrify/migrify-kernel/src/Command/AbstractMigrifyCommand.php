<?php

declare (strict_types=1);
namespace _PhpScoper21763e6c7ac4\Migrify\MigrifyKernel\Command;

use _PhpScoper21763e6c7ac4\Symfony\Component\Console\Command\Command;
use _PhpScoper21763e6c7ac4\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\SmartFileSystem\FileSystemGuard;
use Symplify\SmartFileSystem\Finder\SmartFinder;
use Symplify\SmartFileSystem\SmartFileSystem;
abstract class AbstractMigrifyCommand extends \_PhpScoper21763e6c7ac4\Symfony\Component\Console\Command\Command
{
    /**
     * @var SymfonyStyle
     */
    protected $symfonyStyle;
    /**
     * @var SmartFinder
     */
    protected $smartFinder;
    /**
     * @var FileSystemGuard
     */
    protected $fileSystemGuard;
    /**
     * @var SmartFileSystem
     */
    protected $smartFileSystem;
    /**
     * @required
     */
    public function autowireAbstractMigrifyCommand(\Symplify\SmartFileSystem\Finder\SmartFinder $smartFinder, \_PhpScoper21763e6c7ac4\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\SmartFileSystem\FileSystemGuard $fileSystemGuard, \Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem) : void
    {
        $this->smartFinder = $smartFinder;
        $this->symfonyStyle = $symfonyStyle;
        $this->fileSystemGuard = $fileSystemGuard;
        $this->smartFileSystem = $smartFileSystem;
    }
}
