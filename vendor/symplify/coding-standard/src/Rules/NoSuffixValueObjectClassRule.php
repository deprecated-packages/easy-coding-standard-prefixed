<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\Nette\Utils\Strings;
use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Name;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoSuffixValueObjectClassRule\NoSuffixValueObjectClassRuleTest
 */
final class NoSuffixValueObjectClassRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR = 'Value Object class name "%s" must be withotu "ValueObject" suffix. The correct class name is "%s".';
    /**
     * @see https://regex101.com/r/3jsBnt/1
     * @var string
     */
    private const VALUE_OBJECT_SUFFIX_REGEX = '#ValueObject$#';
    /**
     * @see https://regex101.com/r/zyZ9KJ/1
     * @var string
     */
    private const VALUE_OBJECT_NAMESPACE_REGEX = '#\\bValueObject\\b#';
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
        $namespacedName = $node->namespacedName;
        if (!$namespacedName instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Name) {
            return [];
        }
        $className = (string) $namespacedName;
        if ($className === '') {
            return [];
        }
        if (!$this->hasValueObjectNamespace($className)) {
            return [];
        }
        if (!$this->hasValueObjectSuffix($className)) {
            return [];
        }
        $shortClassName = (string) $node->name;
        $expectedShortClassName = \_PhpScoper3d04c8135695\Nette\Utils\Strings::replace($shortClassName, self::VALUE_OBJECT_SUFFIX_REGEX, '');
        $errorMessage = \sprintf(self::ERROR, $shortClassName, $expectedShortClassName);
        return [$errorMessage];
    }
    private function hasValueObjectNamespace(string $fullyQualifiedClassName) : bool
    {
        return (bool) \_PhpScoper3d04c8135695\Nette\Utils\Strings::match($fullyQualifiedClassName, self::VALUE_OBJECT_NAMESPACE_REGEX);
    }
    private function hasValueObjectSuffix(string $fullyQualifiedClassName) : bool
    {
        return (bool) \_PhpScoper3d04c8135695\Nette\Utils\Strings::match($fullyQualifiedClassName, self::VALUE_OBJECT_SUFFIX_REGEX);
    }
}
