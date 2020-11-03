<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\Nette\Utils\Strings;
use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\StaticCall;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
use Symplify\PackageBuilder\Matcher\ArrayStringAndFnMatcher;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoStaticCallRule\NoStaticCallRuleTest
 */
final class NoStaticCallRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Do not use static calls';
    /**
     * @var string[]
     * @noRector Rector\Php55\Rector\String_\StringClassNameToClassConstantRector
     */
    private const DEFAULT_ALLOWED_STATIC_CALL_CLASSES = [
        // nette
        '_PhpScoper3d04c8135695\\Nette\\Utils\\Strings',
        '_PhpScoper3d04c8135695\\Nette\\Utils\\DateTime',
        '_PhpScoper3d04c8135695\\Nette\\Utils\\Finder',
        '_PhpScoper3d04c8135695\\Nette\\Utils\\FileSystem',
        '_PhpScoper3d04c8135695\\Nette\\Utils\\ObjectHelpers',
        '_PhpScoper3d04c8135695\\Nette\\Utils\\Json',
        '_PhpScoper3d04c8135695\\Nette\\Utils\\Arrays',
        '_PhpScoper3d04c8135695\\Nette\\Utils\\Reflection',
        '_PhpScoper3d04c8135695\\Ramsey\\Uuid\\Uuid',
        // symfony
        '_PhpScoper3d04c8135695\\Symfony\\Component\\Finder\\Finder',
        '_PhpScoper3d04c8135695\\Symfony\\Component\\Yaml\\Yaml',
        '_PhpScoper3d04c8135695\\Symfony\\Component\\Process\\Process',
        '_PhpScoper3d04c8135695\\Symfony\\Component\\Console\\Formatter\\OutputFormatter',
        // symplify
        'Symplify\\EasyTesting\\DataProvider\\StaticFixtureFinder',
        'Symplify\\EasyTesting\\StaticFixtureSplitter',
        'Symplify\\EasyTesting\\PHPUnit\\StaticPHPUnitEnvironment',
        'Symplify\\PackageBuilder\\Console\\Command\\CommandNaming',
        // composer
        'Composer\\Factory',
        // various
        'PhpCsFixer\\Tokenizer\\Tokens',
        '_PhpScoper3d04c8135695\\Jean85\\PrettyVersions',
        '_PhpScoper3d04c8135695\\DG\\BypassFinals',
        '_PhpScoper3d04c8135695\\Nette\\Utils\\Random',
    ];
    /**
     * @var string[]
     */
    private $allowedStaticCallClasses = [];
    /**
     * @var ArrayStringAndFnMatcher
     */
    private $arrayStringAndFnMatcher;
    /**
     * @param string[] $allowedStaticCallClasses
     */
    public function __construct(\Symplify\PackageBuilder\Matcher\ArrayStringAndFnMatcher $arrayStringAndFnMatcher, array $allowedStaticCallClasses = [])
    {
        $this->allowedStaticCallClasses = \array_merge($allowedStaticCallClasses, self::DEFAULT_ALLOWED_STATIC_CALL_CLASSES);
        $this->arrayStringAndFnMatcher = $arrayStringAndFnMatcher;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Expr\StaticCall::class];
    }
    /**
     * @param StaticCall $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        if ($node->class instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr) {
            return [];
        }
        $className = (string) $node->class;
        if (\in_array($className, ['self', 'parent', 'static'], \true)) {
            return [];
        }
        // weird → skip
        if ($node->name instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr) {
            return [];
        }
        // skip static factories
        $method = (string) $node->name;
        if (\_PhpScoper3d04c8135695\Nette\Utils\Strings::startsWith($method, 'create')) {
            return [];
        }
        // skip static class in name
        $shortClassName = (string) \_PhpScoper3d04c8135695\Nette\Utils\Strings::after($className, '\\', -1);
        if (\_PhpScoper3d04c8135695\Nette\Utils\Strings::contains($shortClassName, 'Static')) {
            return [];
        }
        if ($this->arrayStringAndFnMatcher->isMatch($className, $this->allowedStaticCallClasses)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
