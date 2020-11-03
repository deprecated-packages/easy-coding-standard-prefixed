<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Compiler\Composer;

use _PhpScoper2b44cb0c30af\Nette\Utils\Json;
use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use Symplify\ConsoleColorDiff\Console\Output\ConsoleDiffer;
use Symplify\EasyCodingStandard\Compiler\Packagist\SymplifyStableVersionProvider;
use Symplify\SmartFileSystem\SmartFileSystem;
final class ComposerJsonManipulator
{
    /**
     * @var string
     */
    private $originalComposerJsonFileContent;
    /**
     * @var string
     */
    private $composerJsonFilePath;
    /**
     * @var SymplifyStableVersionProvider
     */
    private $symplifyStableVersionProvider;
    /**
     * @var ConsoleDiffer
     */
    private $consoleDiffer;
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;
    public function __construct(\Symplify\EasyCodingStandard\Compiler\Packagist\SymplifyStableVersionProvider $symplifyStableVersionProvider, \Symplify\ConsoleColorDiff\Console\Output\ConsoleDiffer $consoleDiffer, \Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem)
    {
        $this->symplifyStableVersionProvider = $symplifyStableVersionProvider;
        $this->consoleDiffer = $consoleDiffer;
        $this->smartFileSystem = $smartFileSystem;
    }
    public function fixComposerJson(string $composerJsonFilePath) : void
    {
        $this->composerJsonFilePath = $composerJsonFilePath;
        $fileContent = $this->smartFileSystem->readFile($composerJsonFilePath);
        $this->originalComposerJsonFileContent = $fileContent;
        $json = \_PhpScoper2b44cb0c30af\Nette\Utils\Json::decode($fileContent, \_PhpScoper2b44cb0c30af\Nette\Utils\Json::FORCE_ARRAY);
        $json = $this->replaceDevSymplifyVersionWithLastStableVersion($json);
        $json = $this->replacePHPStanWithPHPStanSrc($json);
        $json = $this->changeReplace($json);
        $json = $this->fixPhpCodeSnifferAutoloading($json);
        $json = $this->removeDevContent($json);
        // see https://github.com/phpstan/phpstan-src/blob/769669d4ec2a4839cb1aa25a3a29f05aa86b83ed/composer.json#L19
        $encodedJson = \_PhpScoper2b44cb0c30af\Nette\Utils\Json::encode($json, \_PhpScoper2b44cb0c30af\Nette\Utils\Json::PRETTY);
        // show diff
        $this->consoleDiffer->diff($this->originalComposerJsonFileContent, $encodedJson);
        $this->smartFileSystem->dumpFile($composerJsonFilePath, $encodedJson);
    }
    /**
     * This prevent root composer.json constant override
     */
    public function restore() : void
    {
        $this->smartFileSystem->dumpFile($this->composerJsonFilePath, $this->originalComposerJsonFileContent);
    }
    /**
     * @return mixed[]
     */
    private function replaceDevSymplifyVersionWithLastStableVersion(array $json) : array
    {
        $symplifyVersionToRequire = $this->symplifyStableVersionProvider->provide();
        $packages = \array_keys($json['require']);
        foreach ($packages as $package) {
            /** @var string $package */
            if (!\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::startsWith($package, 'symplify/')) {
                continue;
            }
            $json['require'][$package] = $symplifyVersionToRequire;
        }
        return $json;
    }
    /**
     * Use phpstan/phpstan-src, because the phpstan.phar cannot be packed into ecs.phar
     * @return mixed[]
     */
    private function replacePHPStanWithPHPStanSrc(array $json) : array
    {
        // its actually part of coding standard, so we have to require it here
        $json['require']['phpstan/phpstan-src'] = $this->resolveCodingStandardPHPStanVersion();
        $json['repositories'][] = ['type' => 'vcs', 'url' => 'https://github.com/phpstan/phpstan-src.git'];
        // this allows to install vcs
        $json['minimum-stability'] = 'dev';
        $json['prefer-stable'] = \true;
        return $json;
    }
    /**
     * This prevent installing packages, that are not needed here.
     * @return mixed[]
     */
    private function changeReplace(array $json) : array
    {
        $json['replace'] = ['symfony/polyfill-php70' => '*'];
        return $json;
    }
    /**
     * Their autoloader is broken inside the phar :/
     * @return mixed[]
     */
    private function fixPhpCodeSnifferAutoloading(array $json) : array
    {
        $json['autoload']['classmap'][] = 'vendor/squizlabs/php_codesniffer/src';
        return $json;
    }
    /**
     * @return mixed[]
     */
    private function removeDevContent(array $json) : array
    {
        unset($json['extra'], $json['require-dev'], $json['autoload-dev']);
        return $json;
    }
    private function resolveCodingStandardPHPStanVersion() : string
    {
        $codingStandardFileContent = $this->smartFileSystem->readFile(__DIR__ . '/../../../../../packages/coding-standard/composer.json');
        $json = \_PhpScoper2b44cb0c30af\Nette\Utils\Json::decode($codingStandardFileContent, \_PhpScoper2b44cb0c30af\Nette\Utils\Json::FORCE_ARRAY);
        return (string) $json['require']['phpstan/phpstan'];
    }
}
