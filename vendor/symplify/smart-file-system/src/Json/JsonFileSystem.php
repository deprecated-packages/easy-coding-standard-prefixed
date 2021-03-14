<?php

declare (strict_types=1);
namespace Symplify\SmartFileSystem\Json;

use _PhpScoperfb0714773dc5\Nette\Utils\Arrays;
use _PhpScoperfb0714773dc5\Nette\Utils\Json;
use Symplify\SmartFileSystem\FileSystemGuard;
use Symplify\SmartFileSystem\SmartFileSystem;
/**
 * @see \Symplify\SmartFileSystem\Tests\Json\JsonFileSystem\JsonFileSystemTest
 */
final class JsonFileSystem
{
    /**
     * @var FileSystemGuard
     */
    private $fileSystemGuard;
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;
    public function __construct(\Symplify\SmartFileSystem\FileSystemGuard $fileSystemGuard, \Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem)
    {
        $this->fileSystemGuard = $fileSystemGuard;
        $this->smartFileSystem = $smartFileSystem;
    }
    /**
     * @return mixed[]
     */
    public function loadFilePathToJson(string $filePath) : array
    {
        $this->fileSystemGuard->ensureFileExists($filePath, __METHOD__);
        $fileContent = $this->smartFileSystem->readFile($filePath);
        return \_PhpScoperfb0714773dc5\Nette\Utils\Json::decode($fileContent, \_PhpScoperfb0714773dc5\Nette\Utils\Json::FORCE_ARRAY);
    }
    /**
     * @param array<string, mixed> $jsonArray
     */
    public function writeJsonToFilePath(array $jsonArray, string $filePath) : void
    {
        $jsonContent = \_PhpScoperfb0714773dc5\Nette\Utils\Json::encode($jsonArray, \_PhpScoperfb0714773dc5\Nette\Utils\Json::PRETTY) . \PHP_EOL;
        $this->smartFileSystem->dumpFile($filePath, $jsonContent);
    }
    /**
     * @param array<string, mixed> $newJsonArray
     */
    public function mergeArrayToJsonFile(string $filePath, array $newJsonArray) : void
    {
        $jsonArray = $this->loadFilePathToJson($filePath);
        $newComposerJsonArray = \_PhpScoperfb0714773dc5\Nette\Utils\Arrays::mergeTree($jsonArray, $newJsonArray);
        $this->writeJsonToFilePath($newComposerJsonArray, $filePath);
    }
}
