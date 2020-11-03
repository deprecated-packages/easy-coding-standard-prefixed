<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\StaticCall;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
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
        '_PhpScoper2b44cb0c30af\\Nette\\Utils\\Strings',
        '_PhpScoper2b44cb0c30af\\Nette\\Utils\\DateTime',
        '_PhpScoper2b44cb0c30af\\Nette\\Utils\\Finder',
        '_PhpScoper2b44cb0c30af\\Nette\\Utils\\FileSystem',
        '_PhpScoper2b44cb0c30af\\Nette\\Utils\\ObjectHelpers',
        '_PhpScoper2b44cb0c30af\\Nette\\Utils\\Json',
        '_PhpScoper2b44cb0c30af\\Nette\\Utils\\Arrays',
        '_PhpScoper2b44cb0c30af\\Nette\\Utils\\Reflection',
        '_PhpScoper2b44cb0c30af\\Ramsey\\Uuid\\Uuid',
        // symfony
        '_PhpScoper2b44cb0c30af\\Symfony\\Component\\Finder\\Finder',
        '_PhpScoper2b44cb0c30af\\Symfony\\Component\\Yaml\\Yaml',
        '_PhpScoper2b44cb0c30af\\Symfony\\Component\\Process\\Process',
        '_PhpScoper2b44cb0c30af\\Symfony\\Component\\Console\\Formatter\\OutputFormatter',
        // symplify
        'Symplify\\EasyTesting\\DataProvider\\StaticFixtureFinder',
        'Symplify\\EasyTesting\\StaticFixtureSplitter',
        'Symplify\\EasyTesting\\PHPUnit\\StaticPHPUnitEnvironment',
        'Symplify\\PackageBuilder\\Console\\Command\\CommandNaming',
        // composer
        'Composer\\Factory',
        // various
        'PhpCsFixer\\Tokenizer\\Tokens',
        '_PhpScoper2b44cb0c30af\\Jean85\\PrettyVersions',
        '_PhpScoper2b44cb0c30af\\DG\\BypassFinals',
        '_PhpScoper2b44cb0c30af\\Nette\\Utils\\Random',
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
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\StaticCall::class];
    }
    /**
     * @param StaticCall $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if ($node->class instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr) {
            return [];
        }
        $className = (string) $node->class;
        if (\in_array($className, ['self', 'parent', 'static'], \true)) {
            return [];
        }
        // weird → skip
        if ($node->name instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr) {
            return [];
        }
        // skip static factories
        $method = (string) $node->name;
        if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::startsWith($method, 'create')) {
            return [];
        }
        // skip static class in name
        $shortClassName = (string) \_PhpScoper2b44cb0c30af\Nette\Utils\Strings::after($className, '\\', -1);
        if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::contains($shortClassName, 'Static')) {
            return [];
        }
        if ($this->arrayStringAndFnMatcher->isMatch($className, $this->allowedStaticCallClasses)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
