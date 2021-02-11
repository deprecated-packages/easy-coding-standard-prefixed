<?php

declare (strict_types=1);
namespace Symplify\EasyTesting\Command;

use _PhpScoperef5048aa2573\Symfony\Component\Console\Input\InputArgument;
use _PhpScoperef5048aa2573\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperef5048aa2573\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyTesting\Finder\FixtureFinder;
use Symplify\EasyTesting\MissplacedSkipPrefixResolver;
use Symplify\EasyTesting\ValueObject\Option;
use Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand;
use Symplify\PackageBuilder\Console\ShellCode;
final class ValidateFixtureSkipNamingCommand extends \Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand
{
    /**
     * @var MissplacedSkipPrefixResolver
     */
    private $missplacedSkipPrefixResolver;
    /**
     * @var FixtureFinder
     */
    private $fixtureFinder;
    public function __construct(\Symplify\EasyTesting\MissplacedSkipPrefixResolver $missplacedSkipPrefixResolver, \Symplify\EasyTesting\Finder\FixtureFinder $fixtureFinder)
    {
        $this->missplacedSkipPrefixResolver = $missplacedSkipPrefixResolver;
        $this->fixtureFinder = $fixtureFinder;
        parent::__construct();
    }
    protected function configure() : void
    {
        $this->addArgument(\Symplify\EasyTesting\ValueObject\Option::SOURCE, \_PhpScoperef5048aa2573\Symfony\Component\Console\Input\InputArgument::REQUIRED | \_PhpScoperef5048aa2573\Symfony\Component\Console\Input\InputArgument::IS_ARRAY, 'Paths to analyse');
        $this->setDescription('Check that skipped fixture files (without `-----` separator) have a "skip" prefix');
    }
    protected function execute(\_PhpScoperef5048aa2573\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperef5048aa2573\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $source = (array) $input->getArgument(\Symplify\EasyTesting\ValueObject\Option::SOURCE);
        $fixtureFileInfos = $this->fixtureFinder->find($source);
        $missplacedFixtureFileInfos = $this->missplacedSkipPrefixResolver->resolve($fixtureFileInfos);
        if ($missplacedFixtureFileInfos === []) {
            $message = \sprintf('All %d fixture files have valid names', \count($fixtureFileInfos));
            $this->symfonyStyle->success($message);
            return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
        }
        foreach ($missplacedFixtureFileInfos['incorrect_skips'] as $missplacedFixtureFileInfo) {
            $errorMessage = \sprintf('The file "%s" should drop the "skip/keep" prefix', $missplacedFixtureFileInfo->getRelativeFilePathFromCwd());
            $this->symfonyStyle->note($errorMessage);
        }
        foreach ($missplacedFixtureFileInfos['missing_skips'] as $missplacedFixtureFileInfo) {
            $errorMessage = \sprintf('The file "%s" should start with "skip/keep" prefix', $missplacedFixtureFileInfo->getRelativeFilePathFromCwd());
            $this->symfonyStyle->note($errorMessage);
        }
        $countError = \count($missplacedFixtureFileInfos['incorrect_skips']) + \count($missplacedFixtureFileInfos['missing_skips']);
        if ($countError === 0) {
            $message = \sprintf('All %d fixture files have valid names', \count($fixtureFileInfos));
            $this->symfonyStyle->success($message);
            return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
        }
        $errorMessage = \sprintf('Found %d test file fixtures with wrong prefix', $countError);
        $this->symfonyStyle->error($errorMessage);
        return \Symplify\PackageBuilder\Console\ShellCode::ERROR;
    }
}
