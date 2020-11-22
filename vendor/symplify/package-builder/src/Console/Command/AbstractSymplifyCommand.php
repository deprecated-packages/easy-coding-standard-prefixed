<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Console\Command;

use _PhpScoper21fff473f90a\Symfony\Component\Console\Command\Command;
use _PhpScoper21fff473f90a\Symfony\Component\Console\Input\InputOption;
use _PhpScoper21fff473f90a\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\PackageBuilder\ValueObject\Option;
use Symplify\SmartFileSystem\Finder\SmartFinder;
use Symplify\SmartFileSystem\SmartFileSystem;
abstract class AbstractSymplifyCommand extends \_PhpScoper21fff473f90a\Symfony\Component\Console\Command\Command
{
    /**
     * @var SymfonyStyle
     */
    protected $symfonyStyle;
    /**
     * @var SmartFileSystem
     */
    protected $smartFileSystem;
    /**
     * @var SmartFinder
     */
    protected $smartFinder;
    public function __construct()
    {
        parent::__construct();
        $this->addOption(\Symplify\PackageBuilder\ValueObject\Option::CONFIG, 'c', \_PhpScoper21fff473f90a\Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'Path to config file');
    }
    /**
     * @required
     */
    public function autowireAbstractSymplifyCommand(\_PhpScoper21fff473f90a\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem, \Symplify\SmartFileSystem\Finder\SmartFinder $smartFinder) : void
    {
        $this->symfonyStyle = $symfonyStyle;
        $this->smartFileSystem = $smartFileSystem;
        $this->smartFinder = $smartFinder;
    }
}
