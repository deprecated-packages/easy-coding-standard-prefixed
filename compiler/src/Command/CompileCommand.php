<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Compiler\Command;

use _PhpScoper3d04c8135695\Symfony\Component\Console\Command\Command;
use _PhpScoper3d04c8135695\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper3d04c8135695\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoper3d04c8135695\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\EasyCodingStandard\Compiler\Composer\ComposerJsonManipulator;
use Symplify\EasyCodingStandard\Compiler\ValueObject\Option;
use Symplify\PackageBuilder\Console\ShellCode;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Process\ProcessRunner;
use Symplify\SmartFileSystem\SmartFileSystem;
/**
 * Inspired by @see https://github.com/phpstan/phpstan-src/blob/f939d23155627b5c2ec6eef36d976dddea22c0c5/compiler/src/Console/CompileCommand.php
 */
final class CompileCommand extends \_PhpScoper3d04c8135695\Symfony\Component\Console\Command\Command
{
    /**
     * @var string
     */
    public const NAME = 'ecs:compile';
    /**
     * @var string
     */
    private $dataDir;
    /**
     * @var string
     */
    private $buildDir;
    /**
     * @var ComposerJsonManipulator
     */
    private $composerJsonManipulator;
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;
    /**
     * @var ProcessRunner
     */
    private $processRunner;
    public function __construct(\Symplify\PackageBuilder\Parameter\ParameterProvider $parameterProvider, \_PhpScoper3d04c8135695\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle, \Symplify\EasyCodingStandard\Compiler\Composer\ComposerJsonManipulator $composerJsonManipulator, \Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem, \Symplify\PackageBuilder\Process\ProcessRunner $processRunner)
    {
        parent::__construct();
        $this->dataDir = $parameterProvider->provideParameter(\Symplify\EasyCodingStandard\Compiler\ValueObject\Option::DATA_DIR);
        $this->buildDir = $parameterProvider->provideParameter(\Symplify\EasyCodingStandard\Compiler\ValueObject\Option::BUILD_DIR);
        $this->symfonyStyle = $symfonyStyle;
        $this->composerJsonManipulator = $composerJsonManipulator;
        $this->smartFileSystem = $smartFileSystem;
        $this->processRunner = $processRunner;
    }
    protected function configure() : void
    {
        $this->setDescription('Compile prefixed ecs.phar');
    }
    protected function execute(\_PhpScoper3d04c8135695\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper3d04c8135695\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        /** @var string $composerJsonFilePath */
        $composerJsonFilePath = \realpath($this->buildDir . '/composer.json');
        $message = \sprintf('1. Loading and updating "%s"', \realpath($composerJsonFilePath));
        $this->symfonyStyle->title($message);
        $this->composerJsonManipulator->fixComposerJson($composerJsonFilePath);
        $this->cleanupPhpCsFixerBreakingFiles();
        $this->symfonyStyle->title('2. Running "composer update" for new config');
        // @see https://github.com/dotherightthing/wpdtrt-plugin-boilerplate/issues/52
        $this->processRunner->createAndRun(['composer', 'update', '--no-dev', '--prefer-dist', '--no-interaction', '--classmap-authoritative', '--ansi'], $this->buildDir, $output);
        $this->symfonyStyle->title('3. Packing and prefixing ecs.phar with Box and PHP Scoper');
        // parallel prevention is just for single less-buggy process
        $this->processRunner->createAndRun(['php', 'box.phar', 'compile', '--no-parallel', '--ansi'], $this->dataDir, $output);
        $this->symfonyStyle->title('4. Restoring original "composer.json" content');
        $this->composerJsonManipulator->restore();
        $this->symfonyStyle->note('You still need to run "composer update" to install those dependencies');
        $this->symfonyStyle->success('ecs.phar was generated');
        // success
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
    private function cleanupPhpCsFixerBreakingFiles() : void
    {
        // cleanup
        $filesToRemove = [__DIR__ . '/../../../vendor/friendsofphp/php-cs-fixer/src/Test/AbstractIntegrationTestCase.php'];
        $this->smartFileSystem->remove($filesToRemove);
    }
}
