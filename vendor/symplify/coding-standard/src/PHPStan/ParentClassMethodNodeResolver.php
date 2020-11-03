<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan;

use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Param;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassLike;
use _PhpScoper3d04c8135695\PhpParser\NodeFinder;
use _PhpScoper3d04c8135695\PhpParser\Parser;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
use _PhpScoper3d04c8135695\PHPStan\Reflection\ClassReflection;
use Symplify\SmartFileSystem\SmartFileSystem;
final class ParentClassMethodNodeResolver
{
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;
    /**
     * @var Parser
     */
    private $phpParser;
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem, \_PhpScoper3d04c8135695\PhpParser\Parser $phpParser, \_PhpScoper3d04c8135695\PhpParser\NodeFinder $nodeFinder)
    {
        $this->smartFileSystem = $smartFileSystem;
        $this->phpParser = $phpParser;
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @return Node[]
     */
    public function resolveParentClassMethodNodes(\_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope, string $methodName) : array
    {
        /** @var ClassReflection[] $parentClassReflections */
        $parentClassReflections = $this->getParentClassReflections($scope);
        foreach ($parentClassReflections as $parentClassReflection) {
            $fileName = $parentClassReflection->getFileName();
            if ($fileName === \false) {
                continue;
            }
            // not reachable
            if (\realpath($fileName) === \false) {
                continue;
            }
            $parentClassNodes = $this->parseFileToNodes($fileName);
            /** @var Class_|null $class */
            $class = $this->nodeFinder->findFirstInstanceOf($parentClassNodes, \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_::class);
            if ($class === null) {
                return [];
            }
            $classMethod = $class->getMethod($methodName);
            if ($classMethod === null) {
                continue;
            }
            return (array) $classMethod->getStmts();
        }
        return [];
    }
    /**
     * @return Param[]
     */
    public function resolveParentClassMethodParams(\_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope, string $methodName) : array
    {
        /** @var ClassReflection[] $parentClassReflections */
        $parentClassReflections = $this->getParentClassIncludeInterfaceReflections($scope);
        foreach ($parentClassReflections as $parentClassReflection) {
            $parentClassNodes = $this->parseFileToNodes((string) $parentClassReflection->getFileName());
            /** @var ClassLike[] $classes */
            $classes = $this->nodeFinder->findInstanceOf($parentClassNodes, \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassLike::class);
            if ($classes === []) {
                return [];
            }
            foreach ($classes as $class) {
                $classMethod = $class->getMethod($methodName);
                if ($classMethod === null) {
                    continue;
                }
                return $classMethod->params;
            }
        }
        return [];
    }
    /**
     * @return ClassReflection[]
     */
    private function getParentClassReflections(\_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        /** @var ClassReflection|null $classReflection */
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            return [];
        }
        return $classReflection->getParents();
    }
    /**
     * @return ClassReflection[]
     */
    private function getParentClassIncludeInterfaceReflections(\_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        /** @var ClassReflection|null $classReflection */
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            return [];
        }
        return \array_merge($classReflection->getParents(), $classReflection->getInterfaces());
    }
    /**
     * @return Node[]
     */
    private function parseFileToNodes(string $filePath) : array
    {
        $fileContent = $this->smartFileSystem->readFile($filePath);
        return (array) $this->phpParser->parse($fileContent);
    }
}
