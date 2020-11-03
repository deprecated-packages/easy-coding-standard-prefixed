<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Application;

use Symplify\EasyCodingStandard\Exception\Application\MissingCheckersForChangedFileException;
use Symplify\SmartFileSystem\SmartFileInfo;
final class AppliedCheckersCollector
{
    /**
     * @var array<string, class-string[]>
     */
    private $appliedCheckersByFile = [];
    public function addFileInfoAndChecker(\Symplify\SmartFileSystem\SmartFileInfo $smartFileInfo, string $checker) : void
    {
        $this->appliedCheckersByFile[$smartFileInfo->getRealPath()][] = $checker;
    }
    /**
     * @return class-string[]
     */
    public function getAppliedCheckersPerFileInfo(\Symplify\SmartFileSystem\SmartFileInfo $smartFileInfo) : array
    {
        $this->ensureFileHasAppliedCheckers($smartFileInfo);
        return $this->appliedCheckersByFile[$smartFileInfo->getRealPath()];
    }
    private function ensureFileHasAppliedCheckers(\Symplify\SmartFileSystem\SmartFileInfo $smartFileInfo) : void
    {
        if (isset($this->appliedCheckersByFile[$smartFileInfo->getRealPath()])) {
            return;
        }
        throw new \Symplify\EasyCodingStandard\Exception\Application\MissingCheckersForChangedFileException(\sprintf('File "%s" was changed, but no responsible checkers were added to "%s".', $smartFileInfo->getRelativePathname(), self::class));
    }
}
