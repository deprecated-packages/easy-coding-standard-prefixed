<?php

declare (strict_types=1);
namespace Symplify\RuleDocGenerator\Command;

use _PhpScopere015d8a3273c\Symfony\Component\Console\Command\Command;
use _PhpScopere015d8a3273c\Symfony\Component\Console\Input\InputArgument;
use _PhpScopere015d8a3273c\Symfony\Component\Console\Input\InputInterface;
use _PhpScopere015d8a3273c\Symfony\Component\Console\Input\InputOption;
use _PhpScopere015d8a3273c\Symfony\Component\Console\Output\OutputInterface;
use _PhpScopere015d8a3273c\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\PackageBuilder\Console\ShellCode;
use Symplify\RuleDocGenerator\DirectoryToMarkdownPrinter;
use Symplify\RuleDocGenerator\ValueObject\Option;
use Symplify\SmartFileSystem\SmartFileInfo;
use Symplify\SmartFileSystem\SmartFileSystem;
final class GenerateCommand extends \_PhpScopere015d8a3273c\Symfony\Component\Console\Command\Command
{
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    /**
     * @var DirectoryToMarkdownPrinter
     */
    private $directoryToMarkdownPrinter;
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;
    public function __construct(\_PhpScopere015d8a3273c\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem, \Symplify\RuleDocGenerator\DirectoryToMarkdownPrinter $directoryToMarkdownPrinter)
    {
        parent::__construct();
        $this->symfonyStyle = $symfonyStyle;
        $this->smartFileSystem = $smartFileSystem;
        $this->directoryToMarkdownPrinter = $directoryToMarkdownPrinter;
    }
    protected function configure() : void
    {
        $this->setDescription('Generated Markdown documentation based on documented rules found in directory');
        $this->addArgument(\Symplify\RuleDocGenerator\ValueObject\Option::PATH, \_PhpScopere015d8a3273c\Symfony\Component\Console\Input\InputArgument::REQUIRED, 'Path to directory of your project');
        $this->addOption(\Symplify\RuleDocGenerator\ValueObject\Option::OUTPUT, null, \_PhpScopere015d8a3273c\Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'Path to output generated markdown file', \getcwd() . '/docs/rules_overview.md');
    }
    protected function execute(\_PhpScopere015d8a3273c\Symfony\Component\Console\Input\InputInterface $input, \_PhpScopere015d8a3273c\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $path = (string) $input->getArgument(\Symplify\RuleDocGenerator\ValueObject\Option::PATH);
        $directoryFileInfo = new \Symplify\SmartFileSystem\SmartFileInfo($path);
        $markdownFileContent = $this->directoryToMarkdownPrinter->printDirectory($directoryFileInfo);
        // dump markdown file
        $outputFilePath = (string) $input->getOption(\Symplify\RuleDocGenerator\ValueObject\Option::OUTPUT);
        $this->smartFileSystem->dumpFile($outputFilePath, $markdownFileContent);
        $outputFileInfo = new \Symplify\SmartFileSystem\SmartFileInfo($outputFilePath);
        $message = \sprintf('File "%s" was created', $outputFileInfo->getRelativeFilePathFromCwd());
        $this->symfonyStyle->success($message);
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
}
