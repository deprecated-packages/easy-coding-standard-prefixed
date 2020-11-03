<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\New_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Name;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Return_;
use _PhpScoper2b44cb0c30af\PhpParser\NodeFinder;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoClassWithStaticMethodWithoutStaticNameRule\NoClassWithStaticMethodWithoutStaticNameRuleTest
 */
final class NoClassWithStaticMethodWithoutStaticNameRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Class "%s" with static method must have "static" in its name';
    /**
     * @var string[]
     */
    private const ALLOWED_CLASS_NAMES = [
        // symfony classes with static methods
        '#Subscriber$#',
        '#Command$#',
    ];
    /**
     * @var string
     * @see https://regex101.com/r/O2LN6F/1
     */
    private const STATIC_REGEX = '#static#i';
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoper2b44cb0c30af\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
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
        // skip anonymous class
        $shortClassName = $node->name;
        if ($shortClassName === null) {
            return [];
        }
        if (!$this->isClassWithStaticMethod($node)) {
            return [];
        }
        $classShortName = (string) $shortClassName;
        if ($this->shouldSkipClassName($classShortName)) {
            return [];
        }
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $classShortName);
        return [$errorMessage];
    }
    private function isClassWithStaticMethod($node) : bool
    {
        $classMethods = $node->getMethods();
        foreach ($classMethods as $classMethod) {
            if ($classMethod->isStatic()) {
                if ($this->isStaticConstructorOfValueObject($classMethod)) {
                    continue;
                }
                return \true;
            }
        }
        return \false;
    }
    private function shouldSkipClassName(string $classShortName) : bool
    {
        foreach (self::ALLOWED_CLASS_NAMES as $allowedClassName) {
            if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::match($classShortName, $allowedClassName)) {
                return \true;
            }
        }
        return (bool) \_PhpScoper2b44cb0c30af\Nette\Utils\Strings::match($classShortName, self::STATIC_REGEX);
    }
    private function isStaticConstructorOfValueObject(\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod $classMethod) : bool
    {
        return (bool) $this->nodeFinder->findFirst((array) $classMethod->stmts, function (\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : bool {
            if (!$node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Return_) {
                return \false;
            }
            if (!$node->expr instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\New_) {
                return \false;
            }
            /** @var New_ $new */
            $new = $node->expr;
            if (!$new->class instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Name) {
                return \false;
            }
            return $new->class->toString() === 'self';
        });
    }
}
