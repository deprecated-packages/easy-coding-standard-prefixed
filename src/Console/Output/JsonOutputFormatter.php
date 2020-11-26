<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Console\Output;

use _PhpScoper7c3fefba1fb9\Jean85\PrettyVersions;
use _PhpScoper7c3fefba1fb9\Nette\Utils\Json;
use Symplify\EasyCodingStandard\Configuration\Configuration;
use Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle;
use Symplify\EasyCodingStandard\Contract\Console\Output\OutputFormatterInterface;
use Symplify\EasyCodingStandard\ValueObject\Error\ErrorAndDiffResult;
use Symplify\PackageBuilder\Console\ShellCode;
/**
 * @see \Symplify\EasyCodingStandard\Tests\Console\Output\JsonOutputFormatterTest
 */
final class JsonOutputFormatter implements \Symplify\EasyCodingStandard\Contract\Console\Output\OutputFormatterInterface
{
    /**
     * @var string
     */
    public const NAME = 'json';
    /**
     * @var Configuration
     */
    private $configuration;
    /**
     * @var EasyCodingStandardStyle
     */
    private $easyCodingStandardStyle;
    public function __construct(\Symplify\EasyCodingStandard\Configuration\Configuration $configuration, \Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle $easyCodingStandardStyle)
    {
        $this->configuration = $configuration;
        $this->easyCodingStandardStyle = $easyCodingStandardStyle;
    }
    public function report(\Symplify\EasyCodingStandard\ValueObject\Error\ErrorAndDiffResult $errorAndDiffResult, int $processedFilesCount) : int
    {
        $json = $this->createJsonContent($errorAndDiffResult);
        $this->easyCodingStandardStyle->writeln($json);
        $errorCount = $errorAndDiffResult->getErrorCount();
        return $errorCount === 0 ? \Symplify\PackageBuilder\Console\ShellCode::SUCCESS : \Symplify\PackageBuilder\Console\ShellCode::ERROR;
    }
    public function getName() : string
    {
        return self::NAME;
    }
    public function createJsonContent(\Symplify\EasyCodingStandard\ValueObject\Error\ErrorAndDiffResult $errorAndDiffResult) : string
    {
        $errorsArray = $this->createBaseErrorsArray($errorAndDiffResult);
        $firstResolvedConfigFileInfo = $this->configuration->getFirstResolvedConfigFileInfo();
        if ($firstResolvedConfigFileInfo !== null) {
            $errorsArray['meta']['config'] = $firstResolvedConfigFileInfo->getRealPath();
        }
        $codingStandardErrors = $errorAndDiffResult->getErrors();
        foreach ($codingStandardErrors as $codingStandardError) {
            $errorsArray['files'][$codingStandardError->getRelativeFilePathFromCwd()]['errors'][] = ['line' => $codingStandardError->getLine(), 'file_path' => $codingStandardError->getRelativeFilePathFromCwd(), 'message' => $codingStandardError->getMessage(), 'source_class' => $codingStandardError->getCheckerClass()];
        }
        $fileDiffs = $errorAndDiffResult->getFileDiffs();
        foreach ($fileDiffs as $fileDiff) {
            $errorsArray['files'][$fileDiff->getRelativeFilePathFromCwd()]['diffs'][] = ['diff' => $fileDiff->getDiff(), 'applied_checkers' => $fileDiff->getAppliedCheckers()];
        }
        return \_PhpScoper7c3fefba1fb9\Nette\Utils\Json::encode($errorsArray, \_PhpScoper7c3fefba1fb9\Nette\Utils\Json::PRETTY);
    }
    /**
     * @return mixed[]
     */
    private function createBaseErrorsArray(\Symplify\EasyCodingStandard\ValueObject\Error\ErrorAndDiffResult $errorAndDiffResult) : array
    {
        $version = \_PhpScoper7c3fefba1fb9\Jean85\PrettyVersions::getVersion('symplify/easy-coding-standard');
        return ['meta' => ['version' => $version->getPrettyVersion() ?: 'Unknown'], 'totals' => ['errors' => $errorAndDiffResult->getErrorCount(), 'diffs' => $errorAndDiffResult->getFileDiffsCount()], 'files' => []];
    }
}
