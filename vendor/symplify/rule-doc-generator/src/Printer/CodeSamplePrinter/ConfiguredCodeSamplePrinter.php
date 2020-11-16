<?php

declare (strict_types=1);
namespace Symplify\RuleDocGenerator\Printer\CodeSamplePrinter;

use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Printer\SmartPhpConfigPrinter;
use Symplify\CodingStandard\Exception\NotImplementedYetException;
use Symplify\PackageBuilder\Neon\NeonPrinter;
use Symplify\RuleDocGenerator\Printer\MarkdownCodeWrapper;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\ConfiguredCodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;
final class ConfiguredCodeSamplePrinter
{
    /**
     * @var NeonPrinter
     */
    private $neonPrinter;
    /**
     * @var MarkdownCodeWrapper
     */
    private $markdownCodeWrapper;
    /**
     * @var SmartPhpConfigPrinter
     */
    private $smartPhpConfigPrinter;
    public function __construct(\Symplify\PackageBuilder\Neon\NeonPrinter $neonPrinter, \Symplify\RuleDocGenerator\Printer\MarkdownCodeWrapper $markdownCodeWrapper, \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Printer\SmartPhpConfigPrinter $smartPhpConfigPrinter)
    {
        $this->neonPrinter = $neonPrinter;
        $this->markdownCodeWrapper = $markdownCodeWrapper;
        $this->smartPhpConfigPrinter = $smartPhpConfigPrinter;
    }
    /**
     * @return mixed[]|string[]
     */
    public function print(\Symplify\RuleDocGenerator\ValueObject\CodeSample\ConfiguredCodeSample $configuredCodeSample, \Symplify\RuleDocGenerator\ValueObject\RuleDefinition $ruleDefinition) : array
    {
        if ($ruleDefinition->isPHPStanRule()) {
            $lines = $this->printPHPStanConfiguration($ruleDefinition, $configuredCodeSample);
            $lines[] = '↓';
            return $lines;
        }
        if ($ruleDefinition->isPHPCSFixer()) {
            $lines = [];
            $configContent = $this->smartPhpConfigPrinter->printConfiguredServices([$ruleDefinition->getRuleClass() => $configuredCodeSample->getConfiguration()]);
            $lines[] = $this->markdownCodeWrapper->printPhpCode($configContent);
            $lines[] = '↓';
            return $lines;
        }
        // @todo configured sniff
        throw new \Symplify\CodingStandard\Exception\NotImplementedYetException();
    }
    /**
     * @return mixed[]
     */
    private function printPHPStanConfiguration(\Symplify\RuleDocGenerator\ValueObject\RuleDefinition $ruleDefinition, \Symplify\RuleDocGenerator\ValueObject\CodeSample\ConfiguredCodeSample $configuredCodeSample) : array
    {
        $lines = [];
        $phpstanNeon = ['services' => [['class' => $ruleDefinition->getRuleClass(), 'tags' => ['phpstan.rules.rule'], 'arguments' => $configuredCodeSample->getConfiguration()]]];
        $printedNeon = $this->neonPrinter->printNeon($phpstanNeon);
        $lines[] = $this->markdownCodeWrapper->printYamlCode($printedNeon);
        return $lines;
    }
}
