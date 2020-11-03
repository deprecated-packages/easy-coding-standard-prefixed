<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Const_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassLike;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Function_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\PropertyProperty;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\Rules\AbstractSymplifyRule;
/**
 * @see https://github.com/object-calisthenics/phpcs-calisthenics-rules#6-do-not-abbreviate
 *
 * @see \Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\NoShortNameRule\NoShortNameRuleTest
 */
final class NoShortNameRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Do not name "%s", shorter than %d chars';
    /**
     * @var int
     */
    private $minNameLenght;
    /**
     * @var string[]
     */
    private $allowedShortNames = [];
    /**
     * @param string[] $allowedShortNames
     */
    public function __construct(int $minNameLenght, array $allowedShortNames)
    {
        $this->minNameLenght = $minNameLenght;
        $this->allowedShortNames = $allowedShortNames;
    }
    /**
     * @return class-string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassLike::class, \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Function_::class, \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod::class, \_PhpScoper2b44cb0c30af\PhpParser\Node\Const_::class, \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\PropertyProperty::class];
    }
    /**
     * @param ClassLike|Function_|ClassMethod|Const_|PropertyProperty $node
     * @return array<int, string>
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        $name = (string) $node->name;
        if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::length($name) >= $this->minNameLenght) {
            return [];
        }
        if (\in_array($name, $this->allowedShortNames, \true)) {
            return [];
        }
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $name, $this->minNameLenght);
        return [$errorMessage];
    }
}
