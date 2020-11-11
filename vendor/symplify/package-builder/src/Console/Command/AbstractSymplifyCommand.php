<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Console\Command;

use _PhpScoper2fe14d6302bc\Symfony\Component\Console\Command\Command;
use _PhpScoper2fe14d6302bc\Symfony\Component\Console\Input\InputOption;
use _PhpScoper2fe14d6302bc\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\MonorepoBuilder\ValueObject\File;
use Symplify\MonorepoBuilder\ValueObject\Option;
use Symplify\SmartFileSystem\SmartFileSystem;
abstract class AbstractSymplifyCommand extends \_PhpScoper2fe14d6302bc\Symfony\Component\Console\Command\Command
{
    /**
     * @var SymfonyStyle
     */
    protected $symfonyStyle;
    /**
     * @var SmartFileSystem
     */
    protected $smartFileSystem;
    public function __construct()
    {
        parent::__construct();
        $this->addOption(\Symplify\MonorepoBuilder\ValueObject\Option::CONFIG, 'c', \_PhpScoper2fe14d6302bc\Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'Path to config file', \Symplify\MonorepoBuilder\ValueObject\File::CONFIG);
    }
    /**
     * @required
     */
    public function autowireAbstractSymplifyCommand(\_PhpScoper2fe14d6302bc\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem) : void
    {
        $this->symfonyStyle = $symfonyStyle;
        $this->smartFileSystem = $smartFileSystem;
    }
}
