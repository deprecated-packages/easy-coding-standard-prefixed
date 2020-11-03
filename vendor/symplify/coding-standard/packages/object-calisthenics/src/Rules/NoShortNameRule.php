<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Rules;

use _PhpScoper8de082cbb8c7\Nette\Utils\Strings;
use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Const_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassLike;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Function_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\PropertyProperty;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
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
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassLike::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Function_::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Const_::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\PropertyProperty::class];
    }
    /**
     * @param ClassLike|Function_|ClassMethod|Const_|PropertyProperty $node
     * @return array<int, string>
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $name = (string) $node->name;
        if (\_PhpScoper8de082cbb8c7\Nette\Utils\Strings::length($name) >= $this->minNameLenght) {
            return [];
        }
        if (\in_array($name, $this->allowedShortNames, \true)) {
            return [];
        }
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $name, $this->minNameLenght);
        return [$errorMessage];
    }
}
