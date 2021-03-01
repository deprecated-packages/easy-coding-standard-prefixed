<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Console\Output;

use _PhpScoper06c5fb6c14ed\Jean85\PrettyVersions;
use _PhpScoper06c5fb6c14ed\Nette\Utils\Json;
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
     * @var string
     */
    private const FILES = 'files';
    /**
     * @var EasyCodingStandardStyle
     */
    private $easyCodingStandardStyle;
    public function __construct(\Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle $easyCodingStandardStyle)
    {
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
        $codingStandardErrors = $errorAndDiffResult->getErrors();
        foreach ($codingStandardErrors as $codingStandardError) {
            $errorsArray[self::FILES][$codingStandardError->getRelativeFilePathFromCwd()]['errors'][] = ['line' => $codingStandardError->getLine(), 'file_path' => $codingStandardError->getRelativeFilePathFromCwd(), 'message' => $codingStandardError->getMessage(), 'source_class' => $codingStandardError->getCheckerClass()];
        }
        $fileDiffs = $errorAndDiffResult->getFileDiffs();
        foreach ($fileDiffs as $fileDiff) {
            $errorsArray[self::FILES][$fileDiff->getRelativeFilePathFromCwd()]['diffs'][] = ['diff' => $fileDiff->getDiff(), 'applied_checkers' => $fileDiff->getAppliedCheckers()];
        }
        return \_PhpScoper06c5fb6c14ed\Nette\Utils\Json::encode($errorsArray, \_PhpScoper06c5fb6c14ed\Nette\Utils\Json::PRETTY);
    }
    /**
     * @return mixed[]
     */
    private function createBaseErrorsArray(\Symplify\EasyCodingStandard\ValueObject\Error\ErrorAndDiffResult $errorAndDiffResult) : array
    {
        $version = \_PhpScoper06c5fb6c14ed\Jean85\PrettyVersions::getVersion('symplify/easy-coding-standard');
        return ['meta' => ['version' => $version->getPrettyVersion() ?: 'Unknown'], 'totals' => ['errors' => $errorAndDiffResult->getErrorCount(), 'diffs' => $errorAndDiffResult->getFileDiffsCount()], self::FILES => []];
    }
}
