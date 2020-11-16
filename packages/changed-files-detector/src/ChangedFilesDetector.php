<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\ChangedFilesDetector;

use _PhpScoper239b374a39c8\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoper239b374a39c8\Symfony\Component\Cache\CacheItem;
use Symplify\SmartFileSystem\SmartFileInfo;
/**
 * @see \Symplify\EasyCodingStandard\ChangedFilesDetector\Tests\ChangedFilesDetectorTest
 */
final class ChangedFilesDetector
{
    /**
     * @var string
     */
    public const CHANGED_FILES_CACHE_TAG = 'changed_files';
    /**
     * @var string
     */
    private const CONFIGURATION_HASH_KEY = 'configuration_hash';
    /**
     * @var FileHashComputer
     */
    private $fileHashComputer;
    /**
     * @var TagAwareAdapterInterface
     */
    private $tagAwareAdapter;
    public function __construct(\Symplify\EasyCodingStandard\ChangedFilesDetector\FileHashComputer $fileHashComputer, \_PhpScoper239b374a39c8\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface $tagAwareAdapter)
    {
        $this->fileHashComputer = $fileHashComputer;
        $this->tagAwareAdapter = $tagAwareAdapter;
    }
    /**
     * For tests
     */
    public function changeConfigurationFile(string $configurationFile) : void
    {
        $this->storeConfigurationDataHash($this->fileHashComputer->computeConfig($configurationFile));
    }
    public function addFileInfo(\Symplify\SmartFileSystem\SmartFileInfo $smartFileInfo) : void
    {
        /** @var CacheItem $cacheItem */
        $cacheItem = $this->tagAwareAdapter->getItem($this->fileInfoToKey($smartFileInfo));
        $cacheItem->set($this->fileHashComputer->compute($smartFileInfo->getRealPath()));
        $cacheItem->tag(self::CHANGED_FILES_CACHE_TAG);
        $this->tagAwareAdapter->save($cacheItem);
    }
    public function invalidateFileInfo(\Symplify\SmartFileSystem\SmartFileInfo $smartFileInfo) : void
    {
        $this->tagAwareAdapter->deleteItem($this->fileInfoToKey($smartFileInfo));
    }
    public function hasFileInfoChanged(\Symplify\SmartFileSystem\SmartFileInfo $smartFileInfo) : bool
    {
        $newFileHash = $this->fileHashComputer->compute($smartFileInfo->getRealPath());
        $cacheItem = $this->tagAwareAdapter->getItem($this->fileInfoToKey($smartFileInfo));
        $oldFileHash = $cacheItem->get();
        return $newFileHash !== $oldFileHash;
    }
    public function clearCache() : void
    {
        // clear cache only for changed files group
        $this->tagAwareAdapter->invalidateTags([self::CHANGED_FILES_CACHE_TAG]);
    }
    /**
     * For cache invalidation
     * @param SmartFileInfo[] $configFileInfos
     */
    public function setUsedConfigs(array $configFileInfos) : void
    {
        if (\count($configFileInfos) === 0) {
            return;
        }
        // the first config is core to all → if it was changed, just invalidate it
        $firstConfigFileInfo = $configFileInfos[0];
        $this->storeConfigurationDataHash($this->fileHashComputer->computeConfig($firstConfigFileInfo->getRealPath()));
    }
    private function storeConfigurationDataHash(string $configurationHash) : void
    {
        $this->invalidateCacheIfConfigurationChanged($configurationHash);
        $cacheItem = $this->tagAwareAdapter->getItem(self::CONFIGURATION_HASH_KEY);
        $cacheItem->set($configurationHash);
        $this->tagAwareAdapter->save($cacheItem);
    }
    private function fileInfoToKey(\Symplify\SmartFileSystem\SmartFileInfo $smartFileInfo) : string
    {
        return \sha1($smartFileInfo->getRelativeFilePathFromCwd());
    }
    private function invalidateCacheIfConfigurationChanged(string $configurationHash) : void
    {
        $cacheItem = $this->tagAwareAdapter->getItem(self::CONFIGURATION_HASH_KEY);
        $oldConfigurationHash = $cacheItem->get();
        if ($configurationHash !== $oldConfigurationHash) {
            $this->clearCache();
        }
    }
}
