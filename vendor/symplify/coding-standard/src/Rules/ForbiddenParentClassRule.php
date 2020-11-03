<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use Symplify\PackageBuilder\Matcher\ArrayStringAndFnMatcher;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\ForbiddenParentClassRule\ForbiddenParentClassRuleTest
 */
final class ForbiddenParentClassRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Class "%s" inherits from forbidden parent class "%s". Use "%s" instead';
    /**
     * @var string
     */
    public const COMPOSITION_OVER_INHERITANCE = 'composition over inheritance';
    /**
     * @var ArrayStringAndFnMatcher
     */
    private $arrayStringAndFnMatcher;
    /**
     * @var array<string, string|null>
     * Null, if there is no preference. Just forbidden
     */
    private $forbiddenParentClassesWithPreferences = [];
    /**
     * @param string[] $forbiddenParentClasses
     * @param string[] $forbiddenParentClassesWithPreferences
     */
    public function __construct(\Symplify\PackageBuilder\Matcher\ArrayStringAndFnMatcher $arrayStringAndFnMatcher, array $forbiddenParentClasses = [], array $forbiddenParentClassesWithPreferences = [])
    {
        $this->arrayStringAndFnMatcher = $arrayStringAndFnMatcher;
        $this->forbiddenParentClassesWithPreferences = $forbiddenParentClassesWithPreferences;
        foreach ($forbiddenParentClasses as $forbiddenParentClass) {
            $this->forbiddenParentClassesWithPreferences[$forbiddenParentClass] = null;
        }
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_::class];
    }
    /**
     * @param Class_ $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        $shortClassName = $node->name;
        if ($shortClassName === null) {
            return [];
        }
        // no parent
        if ($node->extends === null) {
            return [];
        }
        $currentParentClass = $node->extends->toString();
        foreach ($this->forbiddenParentClassesWithPreferences as $forbiddenParentClass => $preference) {
            if (!$this->arrayStringAndFnMatcher->isMatch($currentParentClass, [$forbiddenParentClass])) {
                continue;
            }
            // allow inheritance
            if ($preference !== null && $node->isAbstract()) {
                continue;
            }
            $class = $node->namespacedName->toString();
            $errorMessage = $this->createErrorMessage($preference, $class, $currentParentClass);
            return [$errorMessage];
        }
        return [];
    }
    private function createErrorMessage(?string $preference, string $class, string $currentParentClass) : string
    {
        $preferenceMessage = $preference ?? self::COMPOSITION_OVER_INHERITANCE;
        return \sprintf(self::ERROR_MESSAGE, $class, $currentParentClass, $preferenceMessage);
    }
}
