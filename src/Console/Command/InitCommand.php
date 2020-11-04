<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Console\Command;

use _PhpScoperb383f16e851e\Symfony\Component\Console\Command\Command;
use _PhpScoperb383f16e851e\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperb383f16e851e\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperb383f16e851e\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\PackageBuilder\Console\ShellCode;
use Symplify\SmartFileSystem\SmartFileSystem;
final class InitCommand extends \_PhpScoperb383f16e851e\Symfony\Component\Console\Command\Command
{
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    /**
     * InitCommand constructor.
     */
    public function __construct(\Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem, \_PhpScoperb383f16e851e\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle)
    {
        parent::__construct();
        $this->smartFileSystem = $smartFileSystem;
        $this->symfonyStyle = $symfonyStyle;
    }
    protected function configure() : void
    {
        $this->setDescription('Generate rector.php configuration file');
    }
    protected function execute(\_PhpScoperb383f16e851e\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperb383f16e851e\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $rectorConfigFiles = $this->smartFileSystem->exists(\getcwd() . '/ecs.php');
        if (!$rectorConfigFiles) {
            $this->smartFileSystem->copy(__DIR__ . '/../../../ecs.php.dist', \getcwd() . '/ecs.php');
            $this->symfonyStyle->success('ecs.php config file has been generated successfully');
        } else {
            $this->symfonyStyle->error('Config file not generated. A ecs.php configuration file already exists');
        }
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
}