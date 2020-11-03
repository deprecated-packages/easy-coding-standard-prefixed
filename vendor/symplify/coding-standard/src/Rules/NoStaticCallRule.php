<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\Nette\Utils\Strings;
use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\StaticCall;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
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
        '_PhpScoper8de082cbb8c7\\Nette\\Utils\\Strings',
        '_PhpScoper8de082cbb8c7\\Nette\\Utils\\DateTime',
        '_PhpScoper8de082cbb8c7\\Nette\\Utils\\Finder',
        '_PhpScoper8de082cbb8c7\\Nette\\Utils\\FileSystem',
        '_PhpScoper8de082cbb8c7\\Nette\\Utils\\ObjectHelpers',
        '_PhpScoper8de082cbb8c7\\Nette\\Utils\\Json',
        '_PhpScoper8de082cbb8c7\\Nette\\Utils\\Arrays',
        '_PhpScoper8de082cbb8c7\\Nette\\Utils\\Reflection',
        '_PhpScoper8de082cbb8c7\\Ramsey\\Uuid\\Uuid',
        // symfony
        '_PhpScoper8de082cbb8c7\\Symfony\\Component\\Finder\\Finder',
        '_PhpScoper8de082cbb8c7\\Symfony\\Component\\Yaml\\Yaml',
        '_PhpScoper8de082cbb8c7\\Symfony\\Component\\Process\\Process',
        '_PhpScoper8de082cbb8c7\\Symfony\\Component\\Console\\Formatter\\OutputFormatter',
        // symplify
        'Symplify\\EasyTesting\\DataProvider\\StaticFixtureFinder',
        'Symplify\\EasyTesting\\StaticFixtureSplitter',
        'Symplify\\EasyTesting\\PHPUnit\\StaticPHPUnitEnvironment',
        'Symplify\\PackageBuilder\\Console\\Command\\CommandNaming',
        // composer
        'Composer\\Factory',
        // various
        'PhpCsFixer\\Tokenizer\\Tokens',
        '_PhpScoper8de082cbb8c7\\Jean85\\PrettyVersions',
        '_PhpScoper8de082cbb8c7\\DG\\BypassFinals',
        '_PhpScoper8de082cbb8c7\\Nette\\Utils\\Random',
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
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\StaticCall::class];
    }
    /**
     * @param StaticCall $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        if ($node->class instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr) {
            return [];
        }
        $className = (string) $node->class;
        if (\in_array($className, ['self', 'parent', 'static'], \true)) {
            return [];
        }
        // weird → skip
        if ($node->name instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr) {
            return [];
        }
        // skip static factories
        $method = (string) $node->name;
        if (\_PhpScoper8de082cbb8c7\Nette\Utils\Strings::startsWith($method, 'create')) {
            return [];
        }
        // skip static class in name
        $shortClassName = (string) \_PhpScoper8de082cbb8c7\Nette\Utils\Strings::after($className, '\\', -1);
        if (\_PhpScoper8de082cbb8c7\Nette\Utils\Strings::contains($shortClassName, 'Static')) {
            return [];
        }
        if ($this->arrayStringAndFnMatcher->isMatch($className, $this->allowedStaticCallClasses)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
