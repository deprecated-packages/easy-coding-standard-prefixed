<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Name;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Namespace_;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use Symplify\SmartFileSystem\SmartFileInfo;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\CheckNotTestsNamespaceOutsideTestsDirectoryRule\CheckNotTestsNamespaceOutsideTestsDirectoryRuleTest
 */
final class CheckNotTestsNamespaceOutsideTestsDirectoryRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    private const ERROR_NAMESPACE_OUTSIDE_TEST_DIR = '"Tests" namespace (%s) used outside of "tests" directory (%s)';
    /**
     * @var string
     */
    private const ERROR_TEST_FILE_OUTSIDE_NAMESPACE = 'Test file (%s) is outside of "Tests" namespace (%s)';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Namespace_::class];
    }
    /**
     * @param Namespace_ $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if ($node->name === null) {
            return [];
        }
        $fileInfo = new \Symplify\SmartFileSystem\SmartFileInfo($scope->getFile());
        if (!$this->hasTestsNamespace($node->name)) {
            if ($this->hasTestSuffix($scope)) {
                $errorMessage = \sprintf(self::ERROR_TEST_FILE_OUTSIDE_NAMESPACE, $fileInfo->getRelativeFilePathFromCwd(), $node->name->toString());
                return [$errorMessage];
            }
            return [];
        }
        if ($this->isInTestsDirectory($scope)) {
            return [];
        }
        $errorMessage = \sprintf(self::ERROR_NAMESPACE_OUTSIDE_TEST_DIR, $node->name->toString(), $fileInfo->getRelativeFilePathFromCwd());
        return [$errorMessage];
    }
    private function hasTestsNamespace(\_PhpScoper2b44cb0c30af\PhpParser\Node\Name $name) : bool
    {
        return \in_array('Tests', $name->parts, \true);
    }
    private function hasTestSuffix(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : bool
    {
        return \_PhpScoper2b44cb0c30af\Nette\Utils\Strings::endsWith($scope->getFile(), 'Test.php');
    }
    private function isInTestsDirectory(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : bool
    {
        return \_PhpScoper2b44cb0c30af\Nette\Utils\Strings::contains($scope->getFile(), \DIRECTORY_SEPARATOR . 'tests' . \DIRECTORY_SEPARATOR);
    }
}
