<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan\NodeAnalyser;

use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Property;
use Symplify\CodingStandard\NodeAnalyzer\TypeNodeAnalyzer;
use Symplify\CodingStandard\PHPStan\NodeAnalyzer\DependencyNodeAnalyzer;
final class ProtectedAnalyser
{
    /**
     * @var DependencyNodeAnalyzer
     */
    private $dependencyNodeAnalyzer;
    /**
     * @var TypeNodeAnalyzer
     */
    private $typeNodeAnalyzer;
    public function __construct(\Symplify\CodingStandard\PHPStan\NodeAnalyzer\DependencyNodeAnalyzer $dependencyNodeAnalyzer, \Symplify\CodingStandard\NodeAnalyzer\TypeNodeAnalyzer $typeNodeAnalyzer)
    {
        $this->dependencyNodeAnalyzer = $dependencyNodeAnalyzer;
        $this->typeNodeAnalyzer = $typeNodeAnalyzer;
    }
    public function isProtectedPropertyOrClassConstAllowed(\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Property $property) : bool
    {
        if ($this->dependencyNodeAnalyzer->isInsideAbstractClassAndPassedAsDependencyViaConstructorOrSetUp($property)) {
            return \true;
        }
        if ($this->dependencyNodeAnalyzer->isInsideClassAndPassedAsDependencyViaAutowireMethod($property)) {
            return \true;
        }
        return $this->typeNodeAnalyzer->isStaticAndContainerOrKernelType($property);
    }
}
