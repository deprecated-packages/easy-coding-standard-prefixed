<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\Nette\Utils\Strings;
use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\New_;
use _PhpScoper3d04c8135695\PhpParser\Node\Identifier;
use _PhpScoper3d04c8135695\PhpParser\Node\Name\FullyQualified;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\ForbiddenNewOutsideFactoryServiceRule\ForbiddenNewOutsideFactoryServiceRuleTest
 */
final class ForbiddenNewOutsideFactoryServiceRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = '"new" outside factory is not allowed for object type %s.';
    /**
     * @var array<string, string>
     */
    private $types = [];
    /**
     * @param array<string, string> $types
     */
    public function __construct(array $types = [])
    {
        $this->types = $types;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Expr\New_::class];
    }
    /**
     * @param New_ $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        /** @var Class_|null $class */
        $class = $this->resolveCurrentClass($node);
        if ($class === null) {
            return [];
        }
        /** @var Identifier $classIdentifier */
        $classIdentifier = $class->namespacedName;
        $shortClassName = $classIdentifier->toString();
        if (\_PhpScoper3d04c8135695\Nette\Utils\Strings::endsWith($shortClassName, 'Factory')) {
            return [];
        }
        foreach ($this->types as $type) {
            if ($this->isHaveNewWithTypeInside($node, $type)) {
                return [\sprintf(self::ERROR_MESSAGE, $type)];
            }
        }
        return [];
    }
    private function isHaveNewWithTypeInside(\_PhpScoper3d04c8135695\PhpParser\Node\Expr\New_ $new, string $type) : bool
    {
        /** @var FullyQualified $fullyQualifiedName */
        $fullyQualifiedName = $new->class;
        if (!$fullyQualifiedName instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Name\FullyQualified) {
            return \false;
        }
        $className = (string) \end($fullyQualifiedName->parts);
        if (!\_PhpScoper3d04c8135695\Nette\Utils\Strings::startsWith($type, '*')) {
            return $className === $type;
        }
        return \_PhpScoper3d04c8135695\Nette\Utils\Strings::match($className, '#.' . $type . '#') > 0;
    }
}
