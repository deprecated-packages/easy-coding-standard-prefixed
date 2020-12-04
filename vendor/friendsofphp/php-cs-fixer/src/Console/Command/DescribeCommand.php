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

use PhpCsFixer\Differ\DiffConsoleFormatter;
use PhpCsFixer\Differ\FullDiffer;
use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\Fixer\ConfigurationDefinitionFixerInterface;
use PhpCsFixer\Fixer\DefinedFixerInterface;
use PhpCsFixer\Fixer\DeprecatedFixerInterface;
use PhpCsFixer\Fixer\FixerInterface;
use PhpCsFixer\FixerConfiguration\AliasedFixerOption;
use PhpCsFixer\FixerConfiguration\AllowedValueSubset;
use PhpCsFixer\FixerConfiguration\DeprecatedFixerOption;
use PhpCsFixer\FixerDefinition\CodeSampleInterface;
use PhpCsFixer\FixerDefinition\FileSpecificCodeSampleInterface;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\FixerDefinition\VersionSpecificCodeSampleInterface;
use PhpCsFixer\FixerFactory;
use PhpCsFixer\Preg;
use PhpCsFixer\RuleSet;
use PhpCsFixer\StdinFileInfo;
use PhpCsFixer\Tokenizer\Tokens;
use PhpCsFixer\Utils;
use PhpCsFixer\WordMatcher;
use _PhpScopera04bf8e97c06\Symfony\Component\Console\Command\Command;
use _PhpScopera04bf8e97c06\Symfony\Component\Console\Formatter\OutputFormatter;
use _PhpScopera04bf8e97c06\Symfony\Component\Console\Input\InputArgument;
use _PhpScopera04bf8e97c06\Symfony\Component\Console\Input\InputInterface;
use _PhpScopera04bf8e97c06\Symfony\Component\Console\Output\OutputInterface;
/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 * @author SpacePossum
 *
 * @internal
 */
final class DescribeCommand extends \_PhpScopera04bf8e97c06\Symfony\Component\Console\Command\Command
{
    protected static $defaultName = 'describe';
    /**
     * @var string[]
     */
    private $setNames;
    /**
     * @var FixerFactory
     */
    private $fixerFactory;
    /**
     * @var array<string, FixerInterface>
     */
    private $fixers;
    public function __construct(\PhpCsFixer\FixerFactory $fixerFactory = null)
    {
        parent::__construct();
        if (null === $fixerFactory) {
            $fixerFactory = new \PhpCsFixer\FixerFactory();
            $fixerFactory->registerBuiltInFixers();
        }
        $this->fixerFactory = $fixerFactory;
    }
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setDefinition([new \_PhpScopera04bf8e97c06\Symfony\Component\Console\Input\InputArgument('name', \_PhpScopera04bf8e97c06\Symfony\Component\Console\Input\InputArgument::REQUIRED, 'Name of rule / set.')])->setDescription('Describe rule / ruleset.');
    }
    /**
     * {@inheritdoc}
     */
    protected function execute(\_PhpScopera04bf8e97c06\Symfony\Component\Console\Input\InputInterface $input, \_PhpScopera04bf8e97c06\Symfony\Component\Console\Output\OutputInterface $output)
    {
        $name = $input->getArgument('name');
        try {
            if ('@' === $name[0]) {
                $this->describeSet($output, $name);
                return 0;
            }
            $this->describeRule($output, $name);
        } catch (\PhpCsFixer\Console\Command\DescribeNameNotFoundException $e) {
            $matcher = new \PhpCsFixer\WordMatcher('set' === $e->getType() ? $this->getSetNames() : \array_keys($this->getFixers()));
            $alternative = $matcher->match($name);
            $this->describeList($output, $e->getType());
            throw new \InvalidArgumentException(\sprintf('%s "%s" not found.%s', \ucfirst($e->getType()), $name, null === $alternative ? '' : ' Did you mean "' . $alternative . '"?'));
        }
        return 0;
    }
    /**
     * @param string $name
     */
    private function describeRule(\_PhpScopera04bf8e97c06\Symfony\Component\Console\Output\OutputInterface $output, $name)
    {
        $fixers = $this->getFixers();
        if (!isset($fixers[$name])) {
            throw new \PhpCsFixer\Console\Command\DescribeNameNotFoundException($name, 'rule');
        }
        /** @var FixerInterface $fixer */
        $fixer = $fixers[$name];
        if ($fixer instanceof \PhpCsFixer\Fixer\DefinedFixerInterface) {
            $definition = $fixer->getDefinition();
        } else {
            $definition = new \PhpCsFixer\FixerDefinition\FixerDefinition('Description is not available.', []);
        }
        $description = $definition->getSummary();
        if ($fixer instanceof \PhpCsFixer\Fixer\DeprecatedFixerInterface) {
            $successors = $fixer->getSuccessorsNames();
            $message = [] === $successors ? 'will be removed on next major version' : \sprintf('use %s instead', \PhpCsFixer\Utils::naturalLanguageJoinWithBackticks($successors));
            $message = \PhpCsFixer\Preg::replace('/(`.+?`)/', '<info>$1</info>', $message);
            $description .= \sprintf(' <error>DEPRECATED</error>: %s.', $message);
        }
        $output->writeln(\sprintf('<info>Description of</info> %s <info>rule</info>.', $name));
        if ($output->getVerbosity() >= \_PhpScopera04bf8e97c06\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_VERBOSE) {
            $output->writeln(\sprintf('Fixer class: <comment>%s</comment>.', \get_class($fixer)));
        }
        $output->writeln($description);
        if ($definition->getDescription()) {
            $output->writeln($definition->getDescription());
        }
        $output->writeln('');
        if ($fixer->isRisky()) {
            $output->writeln('<error>Fixer applying this rule is risky.</error>');
            if ($definition->getRiskyDescription()) {
                $output->writeln($definition->getRiskyDescription());
            }
            $output->writeln('');
        }
        if ($fixer instanceof \PhpCsFixer\Fixer\ConfigurationDefinitionFixerInterface) {
            $configurationDefinition = $fixer->getConfigurationDefinition();
            $options = $configurationDefinition->getOptions();
            $output->writeln(\sprintf('Fixer is configurable using following option%s:', 1 === \count($options) ? '' : 's'));
            foreach ($options as $option) {
                $line = '* <info>' . \_PhpScopera04bf8e97c06\Symfony\Component\Console\Formatter\OutputFormatter::escape($option->getName()) . '</info>';
                $allowed = \PhpCsFixer\Console\Command\HelpCommand::getDisplayableAllowedValues($option);
                if (null !== $allowed) {
                    foreach ($allowed as &$value) {
                        if ($value instanceof \PhpCsFixer\FixerConfiguration\AllowedValueSubset) {
                            $value = 'a subset of <comment>' . \PhpCsFixer\Console\Command\HelpCommand::toString($value->getAllowedValues()) . '</comment>';
                        } else {
                            $value = '<comment>' . \PhpCsFixer\Console\Command\HelpCommand::toString($value) . '</comment>';
                        }
                    }
                } else {
                    $allowed = \array_map(function ($type) {
                        return '<comment>' . $type . '</comment>';
                    }, $option->getAllowedTypes());
                }
                if (null !== $allowed) {
                    $line .= ' (' . \implode(', ', $allowed) . ')';
                }
                $description = \PhpCsFixer\Preg::replace('/(`.+?`)/', '<info>$1</info>', \_PhpScopera04bf8e97c06\Symfony\Component\Console\Formatter\OutputFormatter::escape($option->getDescription()));
                $line .= ': ' . \lcfirst(\PhpCsFixer\Preg::replace('/\\.$/', '', $description)) . '; ';
                if ($option->hasDefault()) {
                    $line .= \sprintf('defaults to <comment>%s</comment>', \PhpCsFixer\Console\Command\HelpCommand::toString($option->getDefault()));
                } else {
                    $line .= '<comment>required</comment>';
                }
                if ($option instanceof \PhpCsFixer\FixerConfiguration\DeprecatedFixerOption) {
                    $line .= '. <error>DEPRECATED</error>: ' . \PhpCsFixer\Preg::replace('/(`.+?`)/', '<info>$1</info>', \_PhpScopera04bf8e97c06\Symfony\Component\Console\Formatter\OutputFormatter::escape(\lcfirst($option->getDeprecationMessage())));
                }
                if ($option instanceof \PhpCsFixer\FixerConfiguration\AliasedFixerOption) {
                    $line .= '; <error>DEPRECATED</error> alias: <comment>' . $option->getAlias() . '</comment>';
                }
                $output->writeln($line);
            }
            $output->writeln('');
        } elseif ($fixer instanceof \PhpCsFixer\Fixer\ConfigurableFixerInterface) {
            $output->writeln('<comment>Fixer is configurable.</comment>');
            if ($definition->getConfigurationDescription()) {
                $output->writeln($definition->getConfigurationDescription());
            }
            if ($definition->getDefaultConfiguration()) {
                $output->writeln(\sprintf('Default configuration: <comment>%s</comment>.', \PhpCsFixer\Console\Command\HelpCommand::toString($definition->getDefaultConfiguration())));
            }
            $output->writeln('');
        }
        /** @var CodeSampleInterface[] $codeSamples */
        $codeSamples = \array_filter($definition->getCodeSamples(), static function (\PhpCsFixer\FixerDefinition\CodeSampleInterface $codeSample) {
            if ($codeSample instanceof \PhpCsFixer\FixerDefinition\VersionSpecificCodeSampleInterface) {
                return $codeSample->isSuitableFor(\PHP_VERSION_ID);
            }
            return \true;
        });
        if (!\count($codeSamples)) {
            $output->writeln(['Fixing examples can not be demonstrated on the current PHP version.', '']);
        } else {
            $output->writeln('Fixing examples:');
            $differ = new \PhpCsFixer\Differ\FullDiffer();
            $diffFormatter = new \PhpCsFixer\Differ\DiffConsoleFormatter($output->isDecorated(), \sprintf('<comment>   ---------- begin diff ----------</comment>%s%%s%s<comment>   ----------- end diff -----------</comment>', \PHP_EOL, \PHP_EOL));
            foreach ($codeSamples as $index => $codeSample) {
                $old = $codeSample->getCode();
                $tokens = \PhpCsFixer\Tokenizer\Tokens::fromCode($old);
                $configuration = $codeSample->getConfiguration();
                if ($fixer instanceof \PhpCsFixer\Fixer\ConfigurableFixerInterface) {
                    $fixer->configure(null === $configuration ? [] : $configuration);
                }
                $file = $codeSample instanceof \PhpCsFixer\FixerDefinition\FileSpecificCodeSampleInterface ? $codeSample->getSplFileInfo() : new \PhpCsFixer\StdinFileInfo();
                $fixer->fix($file, $tokens);
                $diff = $differ->diff($old, $tokens->generateCode());
                if ($fixer instanceof \PhpCsFixer\Fixer\ConfigurableFixerInterface) {
                    if (null === $configuration) {
                        $output->writeln(\sprintf(' * Example #%d. Fixing with the <comment>default</comment> configuration.', $index + 1));
                    } else {
                        $output->writeln(\sprintf(' * Example #%d. Fixing with configuration: <comment>%s</comment>.', $index + 1, \PhpCsFixer\Console\Command\HelpCommand::toString($codeSample->getConfiguration())));
                    }
                } else {
                    $output->writeln(\sprintf(' * Example #%d.', $index + 1));
                }
                $output->writeln($diffFormatter->format($diff, '   %s'));
                $output->writeln('');
            }
        }
    }
    /**
     * @param string $name
     */
    private function describeSet(\_PhpScopera04bf8e97c06\Symfony\Component\Console\Output\OutputInterface $output, $name)
    {
        if (!\in_array($name, $this->getSetNames(), \true)) {
            throw new \PhpCsFixer\Console\Command\DescribeNameNotFoundException($name, 'set');
        }
        $ruleSet = new \PhpCsFixer\RuleSet([$name => \true]);
        $rules = $ruleSet->getRules();
        \ksort($rules);
        $fixers = $this->getFixers();
        $output->writeln(\sprintf('<info>Description of</info> %s <info>set.</info>', $name));
        $output->writeln('');
        $help = '';
        foreach ($rules as $rule => $config) {
            /** @var FixerDefinitionInterface $definition */
            $definition = $fixers[$rule]->getDefinition();
            $help .= \sprintf(" * <info>%s</info>%s\n   | %s\n%s\n", $rule, $fixers[$rule]->isRisky() ? ' <error>risky</error>' : '', $definition->getSummary(), \true !== $config ? \sprintf("   <comment>| Configuration: %s</comment>\n", \PhpCsFixer\Console\Command\HelpCommand::toString($config)) : '');
        }
        $output->write($help);
    }
    /**
     * @return array<string, FixerInterface>
     */
    private function getFixers()
    {
        if (null !== $this->fixers) {
            return $this->fixers;
        }
        $fixers = [];
        foreach ($this->fixerFactory->getFixers() as $fixer) {
            $fixers[$fixer->getName()] = $fixer;
        }
        $this->fixers = $fixers;
        \ksort($this->fixers);
        return $this->fixers;
    }
    /**
     * @return string[]
     */
    private function getSetNames()
    {
        if (null !== $this->setNames) {
            return $this->setNames;
        }
        $set = new \PhpCsFixer\RuleSet();
        $this->setNames = $set->getSetDefinitionNames();
        \sort($this->setNames);
        return $this->setNames;
    }
    /**
     * @param string $type 'rule'|'set'
     */
    private function describeList(\_PhpScopera04bf8e97c06\Symfony\Component\Console\Output\OutputInterface $output, $type)
    {
        if ($output->getVerbosity() >= \_PhpScopera04bf8e97c06\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_VERY_VERBOSE) {
            $describe = ['set' => $this->getSetNames(), 'rules' => $this->getFixers()];
        } elseif ($output->getVerbosity() >= \_PhpScopera04bf8e97c06\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_VERBOSE) {
            $describe = 'set' === $type ? ['set' => $this->getSetNames()] : ['rules' => $this->getFixers()];
        } else {
            return;
        }
        /** @var string[] $items */
        foreach ($describe as $list => $items) {
            $output->writeln(\sprintf('<comment>Defined %s:</comment>', $list));
            foreach ($items as $name => $item) {
                $output->writeln(\sprintf('* <info>%s</info>', \is_string($name) ? $name : $item));
            }
        }
    }
}
