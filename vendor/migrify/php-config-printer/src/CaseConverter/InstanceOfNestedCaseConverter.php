<?php

declare (strict_types=1);
namespace _PhpScoper48800f361566\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface;
use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper48800f361566\PhpParser\Node\Arg;
use _PhpScoper48800f361566\PhpParser\Node\Expr\MethodCall;
use _PhpScoper48800f361566\PhpParser\Node\Expr\Variable;
use _PhpScoper48800f361566\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _instanceof: <---
 */
final class InstanceOfNestedCaseConverter implements \_PhpScoper48800f361566\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoper48800f361566\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScoper48800f361566\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper48800f361566\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $servicesVariable = new \_PhpScoper48800f361566\PhpParser\Node\Expr\Variable(\_PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $args = [new \_PhpScoper48800f361566\PhpParser\Node\Arg($classConstFetch)];
        $instanceofMethodCall = new \_PhpScoper48800f361566\PhpParser\Node\Expr\MethodCall($servicesVariable, \_PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\MethodName::INSTANCEOF, $args);
        $instanceofMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $instanceofMethodCall);
        $expression = new \_PhpScoper48800f361566\PhpParser\Node\Stmt\Expression($instanceofMethodCall);
        $expression->setAttribute('comments', $instanceofMethodCall->getComments());
        return $expression;
    }
    public function match(string $rootKey, $subKey) : bool
    {
        if ($rootKey !== \_PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (!\is_string($subKey)) {
            return \false;
        }
        return $subKey === \_PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_INSTANCEOF;
    }
}
