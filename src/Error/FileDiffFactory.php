<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Error;

use Symplify\ConsoleColorDiff\Console\Formatter\ColorConsoleDiffFormatter;
use Symplify\EasyCodingStandard\ValueObject\Error\FileDiff;
use Symplify\SmartFileSystem\SmartFileInfo;
final class FileDiffFactory
{
    /**
     * @var ColorConsoleDiffFormatter
     */
    private $colorConsoleDiffFormatter;
    public function __construct(\Symplify\ConsoleColorDiff\Console\Formatter\ColorConsoleDiffFormatter $colorConsoleDiffFormatter)
    {
        $this->colorConsoleDiffFormatter = $colorConsoleDiffFormatter;
    }
    /**
     * @param string[] $appliedCheckers
     */
    public function createFromDiffAndAppliedCheckers(\Symplify\SmartFileSystem\SmartFileInfo $smartFileInfo, string $diff, array $appliedCheckers) : \Symplify\EasyCodingStandard\ValueObject\Error\FileDiff
    {
        $consoleFormattedDiff = $this->colorConsoleDiffFormatter->format($diff);
        return new \Symplify\EasyCodingStandard\ValueObject\Error\FileDiff($smartFileInfo, $diff, $consoleFormattedDiff, $appliedCheckers);
    }
}
