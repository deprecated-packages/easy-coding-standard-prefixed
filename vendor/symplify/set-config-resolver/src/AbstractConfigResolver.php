<?php

declare (strict_types=1);
namespace Symplify\SetConfigResolver;

use _PhpScoper8583deb8ab74\Symfony\Component\Console\Input\InputInterface;
use Symplify\SetConfigResolver\Console\Option\OptionName;
use Symplify\SetConfigResolver\Console\OptionValueResolver;
use Symplify\SmartFileSystem\Exception\FileNotFoundException;
use Symplify\SmartFileSystem\SmartFileInfo;
abstract class AbstractConfigResolver
{
    /**
     * @var OptionValueResolver
     */
    private $optionValueResolver;
    public function __construct()
    {
        $this->optionValueResolver = new \Symplify\SetConfigResolver\Console\OptionValueResolver();
    }
    public function resolveFromInput(\_PhpScoper8583deb8ab74\Symfony\Component\Console\Input\InputInterface $input) : ?\Symplify\SmartFileSystem\SmartFileInfo
    {
        $configValue = $this->optionValueResolver->getOptionValue($input, \Symplify\SetConfigResolver\Console\Option\OptionName::CONFIG);
        if ($configValue !== null) {
            if (!\file_exists($configValue)) {
                $message = \sprintf('File "%s" was not found', $configValue);
                throw new \Symplify\SmartFileSystem\Exception\FileNotFoundException($message);
            }
            return $this->createFileInfo($configValue);
        }
        return null;
    }
    /**
     * @param string[] $fallbackFiles
     */
    public function resolveFromInputWithFallback(\_PhpScoper8583deb8ab74\Symfony\Component\Console\Input\InputInterface $input, array $fallbackFiles) : ?\Symplify\SmartFileSystem\SmartFileInfo
    {
        $configFileInfo = $this->resolveFromInput($input);
        if ($configFileInfo !== null) {
            return $configFileInfo;
        }
        return $this->createFallbackFileInfoIfFound($fallbackFiles);
    }
    /**
     * @param string[] $fallbackFiles
     */
    private function createFallbackFileInfoIfFound(array $fallbackFiles) : ?\Symplify\SmartFileSystem\SmartFileInfo
    {
        foreach ($fallbackFiles as $fallbackFile) {
            $rootFallbackFile = \getcwd() . \DIRECTORY_SEPARATOR . $fallbackFile;
            if (\is_file($rootFallbackFile)) {
                return $this->createFileInfo($rootFallbackFile);
            }
        }
        return null;
    }
    private function createFileInfo(string $configValue) : \Symplify\SmartFileSystem\SmartFileInfo
    {
        return new \Symplify\SmartFileSystem\SmartFileInfo($configValue);
    }
}
