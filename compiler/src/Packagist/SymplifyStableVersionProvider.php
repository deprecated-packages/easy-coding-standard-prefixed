<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Compiler\Packagist;

use _PhpScoper3d04c8135695\Nette\Utils\Json;
use Symplify\EasyCodingStandard\Compiler\ValueObjectFactory\VersionFactory;
use Symplify\SmartFileSystem\SmartFileSystem;
final class SymplifyStableVersionProvider
{
    /**
     * @var string|null
     */
    private $symplifyVersionToRequire;
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;
    /**
     * @var VersionFactory
     */
    private $versionFactory;
    public function __construct(\Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem, \Symplify\EasyCodingStandard\Compiler\ValueObjectFactory\VersionFactory $versionFactory)
    {
        $this->smartFileSystem = $smartFileSystem;
        $this->versionFactory = $versionFactory;
    }
    public function provide() : string
    {
        if ($this->symplifyVersionToRequire !== null) {
            return $this->symplifyVersionToRequire;
        }
        $symplifyPackageContent = $this->smartFileSystem->readFile('https://repo.packagist.org/p/symplify/symplify.json');
        $symplifyPackageJson = $this->loadContentJsonStringToArray($symplifyPackageContent);
        $symplifyPackageVersions = $symplifyPackageJson['packages']['symplify/symplify'];
        $lastStableVersion = $this->getLastKey($symplifyPackageVersions);
        $lastStableVersion = $this->versionFactory->create($lastStableVersion);
        $this->symplifyVersionToRequire = '^' . $lastStableVersion->getMajor()->getValue() . '.' . $lastStableVersion->getMinor()->getValue();
        return $this->symplifyVersionToRequire;
    }
    private function loadContentJsonStringToArray(string $jsonContent) : array
    {
        return \_PhpScoper3d04c8135695\Nette\Utils\Json::decode($jsonContent, \_PhpScoper3d04c8135695\Nette\Utils\Json::FORCE_ARRAY);
    }
    private function getLastKey(array $items) : string
    {
        \end($items);
        return \key($items);
    }
}
