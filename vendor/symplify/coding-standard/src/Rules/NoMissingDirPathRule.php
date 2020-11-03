<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\Nette\Utils\Strings;
use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoper3d04c8135695\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoper3d04c8135695\PhpParser\Node\Scalar\String_;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
use _PhpScoper3d04c8135695\PHPUnit\Framework\TestCase;
use Symplify\CodingStandard\PhpParser\FileExistFuncCallAnalyzer;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoMissingDirPathRule\NoMissingDirPathRuleTest
 */
final class NoMissingDirPathRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'The path "%s" was not found';
    /**
     * @see https://regex101.com/r/OzFMNQ/1
     * @var string
     */
    private const VENDOR_REGEX = '#(vendor|autoload\\.php)#';
    /**
     * @var FileExistFuncCallAnalyzer
     */
    private $fileExistFuncCallAnalyzer;
    public function __construct(\Symplify\CodingStandard\PhpParser\FileExistFuncCallAnalyzer $fileExistFuncCallAnalyzer)
    {
        $this->fileExistFuncCallAnalyzer = $fileExistFuncCallAnalyzer;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Scalar\MagicConst\Dir::class];
    }
    /**
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        $parent = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        if (!$parent instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr\BinaryOp\Concat) {
            return [];
        }
        if (!$parent->right instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Scalar\String_) {
            return [];
        }
        $relativeDirPath = $parent->right->value;
        if ($this->shouldSkip($relativeDirPath, $parent, $scope)) {
            return [];
        }
        $realDirectory = \dirname($scope->getFile());
        $fileRealPath = $realDirectory . $relativeDirPath;
        if (\file_exists($fileRealPath)) {
            return [];
        }
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $relativeDirPath);
        return [$errorMessage];
    }
    private function isPartOfPHPUnit(\_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : bool
    {
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            return \false;
        }
        $className = $classReflection->getName();
        return \is_a($className, \_PhpScoper3d04c8135695\PHPUnit\Framework\TestCase::class, \true);
    }
    private function shouldSkip(string $relativeDirPath, \_PhpScoper3d04c8135695\PhpParser\Node\Expr\BinaryOp\Concat $concat, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : bool
    {
        // is vendor autolaod? it yet to be exist
        if (\_PhpScoper3d04c8135695\Nette\Utils\Strings::match($relativeDirPath, self::VENDOR_REGEX)) {
            return \true;
        }
        if (\_PhpScoper3d04c8135695\Nette\Utils\Strings::contains($relativeDirPath, '*')) {
            return \true;
        }
        if ($this->isPartOfPHPUnit($scope)) {
            return \true;
        }
        if ($this->fileExistFuncCallAnalyzer->isBeingCheckedIfExists($concat)) {
            return \true;
        }
        return $this->fileExistFuncCallAnalyzer->hasParentIfWithFileExistCheck($concat);
    }
}
