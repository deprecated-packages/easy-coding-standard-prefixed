<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\Nette\Utils\Strings;
use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Name;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\ClassNameRespectsParentSuffixRule\ClassNameRespectsParentSuffixRuleTest
 */
final class ClassNameRespectsParentSuffixRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Class "%s" should have suffix "%s" by parent class/interface';
    /**
     * @var string[]
     */
    private const DEFAULT_PARENT_CLASSES = ['Command', 'Controller', 'Repository', 'Presenter', 'Request', 'Response', 'EventSubscriber', 'EventSubscriberInterface', 'FixerInterface', 'Sniff', 'FixerInterface', 'Handler', 'Rule', 'TestCase' => 'Test'];
    /**
     * @var string[]
     */
    private $parentClasses = [];
    /**
     * @param string[] $parentClasses
     */
    public function __construct(array $parentClasses = [])
    {
        $this->parentClasses = $parentClasses;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_::class];
    }
    /**
     * @param Class_ $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        $shortClassName = $node->name;
        if ($shortClassName === null) {
            return [];
        }
        if ($node->isAbstract()) {
            return [];
        }
        if ($node->extends !== null) {
            return $this->processParent($node, $node->extends);
        }
        $class = (string) $shortClassName;
        foreach ($node->implements as $implement) {
            $errorMessages = $this->processClassNameAndShort($class, $implement->getLast());
            if ($errorMessages !== []) {
                return $errorMessages;
            }
        }
        return [];
    }
    /**
     * - SomeInterface => Some
     * - SomeAbstract => Some
     * - AbstractSome => Some
     */
    private function resolveExpectedSuffix(string $parentType) : string
    {
        if (\_PhpScoper3d04c8135695\Nette\Utils\Strings::endsWith($parentType, 'Interface')) {
            $parentType = \_PhpScoper3d04c8135695\Nette\Utils\Strings::substring($parentType, 0, -\strlen('Interface'));
        }
        if (\_PhpScoper3d04c8135695\Nette\Utils\Strings::endsWith($parentType, 'Abstract')) {
            $parentType = \_PhpScoper3d04c8135695\Nette\Utils\Strings::substring($parentType, 0, -\strlen('Abstract'));
        }
        if (\_PhpScoper3d04c8135695\Nette\Utils\Strings::startsWith($parentType, 'Abstract')) {
            $parentType = \_PhpScoper3d04c8135695\Nette\Utils\Strings::substring($parentType, \strlen('Abstract'));
        }
        return $parentType;
    }
    /**
     * @return string[]
     */
    private function processParent(\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_ $class, \_PhpScoper3d04c8135695\PhpParser\Node\Name $parentClassName) : array
    {
        $shortClassName = (string) $class->name;
        $parentShortClassName = $parentClassName->getLast();
        $parentShortClassName = $this->resolveExpectedSuffix($parentShortClassName);
        return $this->processClassNameAndShort($shortClassName, $parentShortClassName);
    }
    /**
     * @return array<int, string>
     */
    private function processClassNameAndShort(string $class, string $currentShortClass) : array
    {
        $currentShortClass = $this->resolveExpectedSuffix($currentShortClass);
        $parentClassesToCheck = $this->getParentClassesToCheck();
        foreach ($parentClassesToCheck as $parentSuffix => $expectedSuffix) {
            if (\is_int($parentSuffix)) {
                $parentSuffix = $expectedSuffix;
            }
            if (!\_PhpScoper3d04c8135695\Nette\Utils\Strings::endsWith($currentShortClass, $parentSuffix)) {
                continue;
            }
            if (\_PhpScoper3d04c8135695\Nette\Utils\Strings::endsWith($class, $expectedSuffix)) {
                return [];
            }
            $errorMessage = \sprintf(self::ERROR_MESSAGE, $class, $currentShortClass);
            return [$errorMessage];
        }
        return [];
    }
    /**
     * @return string[]
     */
    private function getParentClassesToCheck() : array
    {
        return \array_merge(self::DEFAULT_PARENT_CLASSES, $this->parentClasses);
    }
}
