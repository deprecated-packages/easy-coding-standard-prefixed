<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\Nette\Utils\Strings;
use PhpCsFixer\Tokenizer\Token;
use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\New_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Return_;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
use _PhpScoper3d04c8135695\PHPStan\Type\TypeWithClassName;
use _PhpScoper3d04c8135695\Symfony\Component\Process\Process;
use Symplify\PackageBuilder\Matcher\ArrayStringAndFnMatcher;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoNewOutsideFactoryRule\NoNewOutsideFactoryRuleTest
 */
final class NoNewOutsideFactoryRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use decouled factory service to create "%s" object';
    /**
     * @var string[]
     */
    private const ALLOWED_CLASSES = ['*FileInfo', '*\\Node\\*', \PhpCsFixer\Tokenizer\Token::class];
    /**
     * @var ArrayStringAndFnMatcher
     */
    private $arrayStringAndFnMatcher;
    /**
     * @var TypeWithClassName|null
     */
    private $typeWithClassName;
    public function __construct(\Symplify\PackageBuilder\Matcher\ArrayStringAndFnMatcher $arrayStringAndFnMatcher)
    {
        $this->arrayStringAndFnMatcher = $arrayStringAndFnMatcher;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Expr\New_::class, \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Return_::class];
    }
    /**
     * @param New_|Return_ $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        // just collect new type node here, so we have context later
        if ($node instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr\New_) {
            $newClassType = $scope->getType($node);
            if (!$newClassType instanceof \_PhpScoper3d04c8135695\PHPStan\Type\TypeWithClassName) {
                return [];
            }
            $this->typeWithClassName = $newClassType;
            return [];
        }
        // working with return here
        if ($this->typeWithClassName === null) {
            return [];
        }
        // is new class allowed without factory or in right place?
        $newClassName = $this->typeWithClassName->getClassName();
        if ($this->arrayStringAndFnMatcher->isMatch($newClassName, self::ALLOWED_CLASSES)) {
            return [];
        }
        if ($this->isLocatedInCorrectlyNamedClass($scope)) {
            return [];
        }
        if ($node->expr === null) {
            $this->typeWithClassName = null;
            return [];
        }
        $returnType = $scope->getType($node->expr);
        // not a match, probably somewhere else
        if (!$this->typeWithClassName->equals($returnType)) {
            $this->typeWithClassName = null;
            return [];
        }
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $newClassName);
        return [$errorMessage];
    }
    private function isLocatedInCorrectlyNamedClass(\_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : bool
    {
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            return \true;
        }
        $currentClassName = $classReflection->getName();
        if (\_PhpScoper3d04c8135695\Nette\Utils\Strings::endsWith($currentClassName, 'Factory')) {
            return \true;
        }
        return \_PhpScoper3d04c8135695\Nette\Utils\Strings::endsWith($currentClassName, 'Test');
    }
}
