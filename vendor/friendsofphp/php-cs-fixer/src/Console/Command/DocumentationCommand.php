<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace PhpCsFixer\Console\Command;

use PhpCsFixer\Documentation\DocumentationGenerator;
use PhpCsFixer\FixerFactory;
use PhpCsFixer\RuleSet\RuleSets;
use _PhpScoper3d66e802e797\Symfony\Component\Console\Command\Command;
use _PhpScoper3d66e802e797\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper3d66e802e797\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoper3d66e802e797\Symfony\Component\Filesystem\Filesystem;
use _PhpScoper3d66e802e797\Symfony\Component\Finder\Finder;
use _PhpScoper3d66e802e797\Symfony\Component\Finder\SplFileInfo;
/**
 * @internal
 */
final class DocumentationCommand extends \_PhpScoper3d66e802e797\Symfony\Component\Console\Command\Command
{
    protected static $defaultName = 'documentation';
    /**
     * @var DocumentationGenerator
     */
    private $generator;
    public function __construct($name = null)
    {
        parent::__construct($name);
        $this->generator = new \PhpCsFixer\Documentation\DocumentationGenerator();
    }
    protected function configure()
    {
        $this->setAliases(['doc'])->setDescription('Dumps the documentation of the project into its /doc directory.');
    }
    protected function execute(\_PhpScoper3d66e802e797\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper3d66e802e797\Symfony\Component\Console\Output\OutputInterface $output)
    {
        $fixerFactory = new \PhpCsFixer\FixerFactory();
        $fixerFactory->registerBuiltInFixers();
        $fixers = $fixerFactory->getFixers();
        $this->generateFixersDocs($fixers);
        $this->generateRuleSetsDocs($fixers);
        $output->writeln('Docs updated.');
        return 0;
    }
    private function generateFixersDocs(array $fixers)
    {
        $filesystem = new \_PhpScoper3d66e802e797\Symfony\Component\Filesystem\Filesystem();
        // Array of existing fixer docs.
        // We first override existing files, and then we will delete files that are no longer needed.
        // We cannot remove all files first, as generation of docs is re-using existing docs to extract code-samples for
        // VersionSpecificCodeSample under incompatible PHP version.
        $docForFixerRelativePaths = [];
        foreach ($fixers as $fixer) {
            $docForFixerRelativePaths[] = $this->generator->getFixerDocumentationFileRelativePath($fixer);
            $filesystem->dumpFile($this->generator->getFixerDocumentationFilePath($fixer), $this->generator->generateFixerDocumentation($fixer));
        }
        /** @var SplFileInfo $file */
        foreach ((new \_PhpScoper3d66e802e797\Symfony\Component\Finder\Finder())->files()->in($this->generator->getFixersDocumentationDirectoryPath())->notPath($docForFixerRelativePaths) as $file) {
            $filesystem->remove($file->getPathname());
        }
        $index = $this->generator->getFixersDocumentationIndexFilePath();
        if (\false === @\file_put_contents($index, $this->generator->generateFixersDocumentationIndex($fixers))) {
            throw new \RuntimeException("Failed updating file {$index}.");
        }
    }
    private function generateRuleSetsDocs(array $fixers)
    {
        $filesystem = new \_PhpScoper3d66e802e797\Symfony\Component\Filesystem\Filesystem();
        /** @var SplFileInfo $file */
        foreach ((new \_PhpScoper3d66e802e797\Symfony\Component\Finder\Finder())->files()->in($this->generator->getRuleSetsDocumentationDirectoryPath()) as $file) {
            $filesystem->remove($file->getPathname());
        }
        $index = $this->generator->getRuleSetsDocumentationIndexFilePath();
        $paths = [];
        foreach (\PhpCsFixer\RuleSet\RuleSets::getSetDefinitions() as $name => $definition) {
            $paths[$name] = $path = $this->generator->getRuleSetsDocumentationFilePath($name);
            $filesystem->dumpFile($path, $this->generator->generateRuleSetsDocumentation($definition, $fixers));
        }
        if (\false === @\file_put_contents($index, $this->generator->generateRuleSetsDocumentationIndex($paths))) {
            throw new \RuntimeException("Failed updating file {$index}.");
        }
    }
}
