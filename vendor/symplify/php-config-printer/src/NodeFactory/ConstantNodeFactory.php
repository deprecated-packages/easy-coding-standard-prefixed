<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperab9510cd5d97\Nette\Utils\Strings;
use _PhpScoperab9510cd5d97\PhpParser\Node\Expr;
use _PhpScoperab9510cd5d97\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperab9510cd5d97\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperab9510cd5d97\PhpParser\Node\Name;
use _PhpScoperab9510cd5d97\PhpParser\Node\Name\FullyQualified;
use Symplify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
/**
 * Hacking constants @solve better in the future
 * now it's hardcoded very deep in yaml parser, so unable to detected: https://github.com/symfony/symfony/blob/ba4d57bb5fc0e9a1b4f63ced66156296dea3687e/src/Symfony/Component/Yaml/Inline.php#L617
 * @see https://github.com/symfony/symfony/pull/18626/files
 */
final class ConstantNodeFactory
{
    /**
     * @var YamlFileContentProviderInterface
     */
    private $yamlFileContentProvider;
    public function __construct(\Symplify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface $yamlFileContentProvider)
    {
        $this->yamlFileContentProvider = $yamlFileContentProvider;
    }
    /**
     * @return ConstFetch|ClassConstFetch|null
     */
    public function createConstantIfValue(string $value) : ?\_PhpScoperab9510cd5d97\PhpParser\Node\Expr
    {
        if (\_PhpScoperab9510cd5d97\Nette\Utils\Strings::contains($value, '::')) {
            [$class, $constant] = \explode('::', $value);
            // not uppercase → probably not a constant
            if (\strtoupper($constant) !== $constant) {
                return null;
            }
            return new \_PhpScoperab9510cd5d97\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperab9510cd5d97\PhpParser\Node\Name\FullyQualified($class), $constant);
        }
        $definedConstants = \get_defined_constants();
        foreach (\array_keys($definedConstants) as $constantName) {
            if ($value !== \constant($constantName)) {
                continue;
            }
            $yamlContent = $this->yamlFileContentProvider->getYamlContent();
            $constantDefinitionPattern = '#' . \preg_quote('!php/const', '#') . '(\\s)+' . $constantName . '#';
            if (!\_PhpScoperab9510cd5d97\Nette\Utils\Strings::match($yamlContent, $constantDefinitionPattern)) {
                continue;
            }
            return new \_PhpScoperab9510cd5d97\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperab9510cd5d97\PhpParser\Node\Name($constantName));
        }
        return null;
    }
}
