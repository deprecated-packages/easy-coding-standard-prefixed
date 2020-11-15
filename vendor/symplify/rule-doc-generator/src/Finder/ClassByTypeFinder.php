<?php

declare (strict_types=1);
namespace Symplify\RuleDocGenerator\Finder;

use _PhpScopercb576ca159b5\Nette\Loaders\RobotLoader;
use ReflectionClass;
use Symplify\SmartFileSystem\SmartFileInfo;
final class ClassByTypeFinder
{
    /**
     * @return string[]
     */
    public function findByType(\Symplify\SmartFileSystem\SmartFileInfo $directoryFileInfo, string $type) : array
    {
        $robotLoader = new \_PhpScopercb576ca159b5\Nette\Loaders\RobotLoader();
        $robotLoader->setTempDirectory(\sys_get_temp_dir() . '/robot_loader_temp');
        $robotLoader->addDirectory($directoryFileInfo->getPathname());
        $robotLoader->ignoreDirs[] = '*tests*';
        $robotLoader->ignoreDirs[] = '*Fixture*';
        $robotLoader->rebuild();
        $desiredClasses = [];
        foreach (\array_keys($robotLoader->getIndexedClasses()) as $class) {
            if (!\is_a($class, $type, \true)) {
                continue;
            }
            // skip abstract classes
            $reflectionClass = new \ReflectionClass($class);
            if ($reflectionClass->isAbstract()) {
                continue;
            }
            $desiredClasses[] = $class;
        }
        \sort($desiredClasses);
        return $desiredClasses;
    }
}
