<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\Nette\Utils\Strings;
use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassLike;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoDuplicatedShortClassNameRule\NoDuplicatedShortClassNameRuleTest
 */
final class NoDuplicatedShortClassNameRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Class with base "%s" name is already used in "%s". Use unique name to make classes easy to recognize';
    /**
     * @var string[]
     */
    private const ALLOWED_CLASS_NAMES = [
        '#File$#',
        # per monorepo package unique
        '#Exception$#',
        '#Option#',
        '#InitCommand#',
        # extended 3rd party class
        '#CommentedOutCodeSniff$#',
        # tests
        '#Some#',
        '#GithubApi#',
    ];
    /**
     * @var string[][]
     */
    private $declaredClassesByShortName = [];
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassLike::class];
    }
    /**
     * @param ClassLike $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        $fullyQualifiedClassName = (string) $node->namespacedName;
        if ($fullyQualifiedClassName === '') {
            return [];
        }
        if ($this->isAllowedClass($fullyQualifiedClassName)) {
            return [];
        }
        $this->prepareDeclaredClassesByShortName();
        /** @var string $shortClassName */
        $shortClassName = \_PhpScoper3d04c8135695\Nette\Utils\Strings::after($fullyQualifiedClassName, '\\', -1);
        $classesByShortName = $this->declaredClassesByShortName[$shortClassName] ?? [];
        if (\count($classesByShortName) <= 1) {
            return [];
        }
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $shortClassName, \implode('", "', $classesByShortName));
        return [$errorMessage];
    }
    private function prepareDeclaredClassesByShortName() : void
    {
        // is defined?
        if ($this->declaredClassesByShortName !== []) {
            return;
        }
        $fullyQualifiedClassNames = \get_declared_classes();
        foreach ($fullyQualifiedClassNames as $fullyQualifiedClassName) {
            if (!\_PhpScoper3d04c8135695\Nette\Utils\Strings::contains($fullyQualifiedClassName, '\\')) {
                continue;
            }
            $shortClassName = \_PhpScoper3d04c8135695\Nette\Utils\Strings::after($fullyQualifiedClassName, '\\', -1);
            $this->declaredClassesByShortName[$shortClassName][] = $fullyQualifiedClassName;
        }
        \ksort($this->declaredClassesByShortName);
    }
    private function isAllowedClass(string $name) : bool
    {
        // is allowed
        foreach (self::ALLOWED_CLASS_NAMES as $allowedClassName) {
            if (\_PhpScoper3d04c8135695\Nette\Utils\Strings::match($name, $allowedClassName)) {
                return \true;
            }
        }
        return \false;
    }
}
