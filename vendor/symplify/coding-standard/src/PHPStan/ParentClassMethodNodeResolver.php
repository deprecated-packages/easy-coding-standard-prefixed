<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Param;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassLike;
use _PhpScoper2b44cb0c30af\PhpParser\NodeFinder;
use _PhpScoper2b44cb0c30af\PhpParser\Parser;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Reflection\ClassReflection;
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
    public function __construct(\Symplify\SmartFileSystem\SmartFileSystem $smartFileSystem, \_PhpScoper2b44cb0c30af\PhpParser\Parser $phpParser, \_PhpScoper2b44cb0c30af\PhpParser\NodeFinder $nodeFinder)
    {
        $this->smartFileSystem = $smartFileSystem;
        $this->phpParser = $phpParser;
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @return Node[]
     */
    public function resolveParentClassMethodNodes(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope, string $methodName) : array
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
            $class = $this->nodeFinder->findFirstInstanceOf($parentClassNodes, \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_::class);
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
    public function resolveParentClassMethodParams(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope, string $methodName) : array
    {
        /** @var ClassReflection[] $parentClassReflections */
        $parentClassReflections = $this->getParentClassIncludeInterfaceReflections($scope);
        foreach ($parentClassReflections as $parentClassReflection) {
            $parentClassNodes = $this->parseFileToNodes((string) $parentClassReflection->getFileName());
            /** @var ClassLike[] $classes */
            $classes = $this->nodeFinder->findInstanceOf($parentClassNodes, \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassLike::class);
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
    private function getParentClassReflections(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
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
    private function getParentClassIncludeInterfaceReflections(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
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
