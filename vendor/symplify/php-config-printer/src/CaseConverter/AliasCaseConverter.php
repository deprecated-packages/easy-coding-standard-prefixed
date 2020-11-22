<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\CaseConverter;

use _PhpScopera88a8b9f064a\Nette\Utils\Strings;
use _PhpScopera88a8b9f064a\PhpParser\Node\Arg;
use _PhpScopera88a8b9f064a\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopera88a8b9f064a\PhpParser\Node\Expr\MethodCall;
use _PhpScopera88a8b9f064a\PhpParser\Node\Expr\Variable;
use _PhpScopera88a8b9f064a\PhpParser\Node\Scalar\String_;
use _PhpScopera88a8b9f064a\PhpParser\Node\Stmt\Expression;
use Symplify\PhpConfigPrinter\Contract\CaseConverterInterface;
use Symplify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use Symplify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use Symplify\PhpConfigPrinter\ValueObject\MethodName;
use Symplify\PhpConfigPrinter\ValueObject\VariableName;
use Symplify\PhpConfigPrinter\ValueObject\YamlKey;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
/**
 * Handles this part:
 *
 * services:
 *     Some: Other <---
 */
final class AliasCaseConverter implements \Symplify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @see https://regex101.com/r/BwXkfO/2/
     * @var string
     */
    private const ARGUMENT_NAME_REGEX = '#\\$(?<argument_name>\\w+)#';
    /**
     * @see https://regex101.com/r/7y3Kq9/1
     * @var string
     */
    private const TYPED_VARIABLE_REGEX = '#\\w+\\s+\\$\\w+#';
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\Symplify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \Symplify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScopera88a8b9f064a\PhpParser\Node\Stmt\Expression
    {
        if (!\is_string($key)) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        $servicesVariable = new \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        if (\class_exists($key) || \interface_exists($key)) {
            $classReference = $this->commonNodeFactory->createClassReference($key);
            $argValues = [];
            $argValues[] = $classReference;
            $argValues[] = $values[\Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS] ?? $values;
            $args = $this->argsNodeFactory->createFromValues($argValues, \true);
            $methodCall = new \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\MethodCall($servicesVariable, \Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS, $args);
            return new \_PhpScopera88a8b9f064a\PhpParser\Node\Stmt\Expression($methodCall);
        }
        // handles: "SomeClass $someVariable: ..."
        $fullClassName = \_PhpScopera88a8b9f064a\Nette\Utils\Strings::before($key, ' $');
        if ($fullClassName !== null) {
            $methodCall = $this->createAliasNode($key, $fullClassName, $values);
            return new \_PhpScopera88a8b9f064a\PhpParser\Node\Stmt\Expression($methodCall);
        }
        if (isset($values[\Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS])) {
            $className = $values[\Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS];
            $classReference = $this->commonNodeFactory->createClassReference($className);
            $args = $this->argsNodeFactory->createFromValues([$key, $classReference]);
            $methodCall = new \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\MethodCall($servicesVariable, \Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS, $args);
            unset($values[\Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS]);
        }
        /** @var string|mixed[] $values */
        if (\is_string($values) && $values[0] === '@') {
            $args = $this->argsNodeFactory->createFromValues([$values], \true);
            $methodCall = new \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\MethodCall($servicesVariable, \Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS, $args);
        } else {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        return new \_PhpScopera88a8b9f064a\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \Symplify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (isset($values[\Symplify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS])) {
            return \true;
        }
        if (\_PhpScopera88a8b9f064a\Nette\Utils\Strings::match($key, self::TYPED_VARIABLE_REGEX)) {
            return \true;
        }
        return \is_string($values) && $values[0] === '@';
    }
    private function createAliasNode(string $key, string $fullClassName, $serviceValues) : \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\MethodCall
    {
        $args = [];
        $classConstFetch = $this->commonNodeFactory->createClassReference($fullClassName);
        \_PhpScopera88a8b9f064a\Nette\Utils\Strings::match($key, self::ARGUMENT_NAME_REGEX);
        $argumentName = '$' . \_PhpScopera88a8b9f064a\Nette\Utils\Strings::after($key, '$');
        $concat = new \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\BinaryOp\Concat($classConstFetch, new \_PhpScopera88a8b9f064a\PhpParser\Node\Scalar\String_(' ' . $argumentName));
        $args[] = new \_PhpScopera88a8b9f064a\PhpParser\Node\Arg($concat);
        $serviceName = \ltrim($serviceValues, '@');
        $args[] = new \_PhpScopera88a8b9f064a\PhpParser\Node\Arg(new \_PhpScopera88a8b9f064a\PhpParser\Node\Scalar\String_($serviceName));
        return new \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\MethodCall(new \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS, $args);
    }
}
