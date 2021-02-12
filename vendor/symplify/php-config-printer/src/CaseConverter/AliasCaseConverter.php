<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\CaseConverter;

use _PhpScoper4fc0030e9d22\Nette\Utils\Strings;
use _PhpScoper4fc0030e9d22\PhpParser\Node\Arg;
use _PhpScoper4fc0030e9d22\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoper4fc0030e9d22\PhpParser\Node\Expr\MethodCall;
use _PhpScoper4fc0030e9d22\PhpParser\Node\Expr\Variable;
use _PhpScoper4fc0030e9d22\PhpParser\Node\Scalar\String_;
use _PhpScoper4fc0030e9d22\PhpParser\Node\Stmt\Expression;
use Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker;
use Symplify\PhpConfigPrinter\Contract\CaseConverterInterface;
use Symplify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use Symplify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use Symplify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
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
     * @see https://regex101.com/r/DDuuVM/1
     * @var string
     */
    private const NAMED_ALIAS_REGEX = '#\\w+\\s+\\$\\w+#';
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    /**
     * @var ClassLikeExistenceChecker
     */
    private $classLikeExistenceChecker;
    public function __construct(\Symplify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \Symplify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \Symplify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory, \Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker $classLikeExistenceChecker)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
        $this->classLikeExistenceChecker = $classLikeExistenceChecker;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper4fc0030e9d22\PhpParser\Node\Stmt\Expression
    {
        if (!\is_string($key)) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        $servicesVariable = new \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        if ($this->classLikeExistenceChecker->doesClassLikeExist($key)) {
            return $this->createFromClassLike($key, $values, $servicesVariable);
        }
        // handles: "SomeClass $someVariable: ..."
        $fullClassName = \_PhpScoper4fc0030e9d22\Nette\Utils\Strings::before($key, ' $');
        if ($fullClassName !== null) {
            $methodCall = $this->createAliasNode($key, $fullClassName, $values);
            return new \_PhpScoper4fc0030e9d22\PhpParser\Node\Stmt\Expression($methodCall);
        }
        if (\is_string($values) && $values[0] === '@') {
            $args = $this->argsNodeFactory->createFromValues([$values], \true);
            $methodCall = new \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\MethodCall($servicesVariable, \Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS, $args);
            return new \_PhpScoper4fc0030e9d22\PhpParser\Node\Stmt\Expression($methodCall);
        }
        if (\is_array($values)) {
            return $this->createFromArrayValues($values, $key, $servicesVariable);
        }
        throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \Symplify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (isset($values[\Symplify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS])) {
            return \true;
        }
        if (\_PhpScoper4fc0030e9d22\Nette\Utils\Strings::match($key, self::NAMED_ALIAS_REGEX)) {
            return \true;
        }
        if (!\is_string($values)) {
            return \false;
        }
        return $values[0] === '@';
    }
    private function createAliasNode(string $key, string $fullClassName, $serviceValues) : \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\MethodCall
    {
        $args = [];
        $classConstFetch = $this->commonNodeFactory->createClassReference($fullClassName);
        \_PhpScoper4fc0030e9d22\Nette\Utils\Strings::match($key, self::ARGUMENT_NAME_REGEX);
        $argumentName = '$' . \_PhpScoper4fc0030e9d22\Nette\Utils\Strings::after($key, '$');
        $concat = new \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\BinaryOp\Concat($classConstFetch, new \_PhpScoper4fc0030e9d22\PhpParser\Node\Scalar\String_(' ' . $argumentName));
        $args[] = new \_PhpScoper4fc0030e9d22\PhpParser\Node\Arg($concat);
        $serviceName = \ltrim($serviceValues, '@');
        $args[] = new \_PhpScoper4fc0030e9d22\PhpParser\Node\Arg(new \_PhpScoper4fc0030e9d22\PhpParser\Node\Scalar\String_($serviceName));
        return new \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\MethodCall(new \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS, $args);
    }
    /**
     * @param mixed $values
     */
    private function createFromClassLike(string $key, $values, \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\Variable $servicesVariable) : \_PhpScoper4fc0030e9d22\PhpParser\Node\Stmt\Expression
    {
        $classReference = $this->commonNodeFactory->createClassReference($key);
        $argValues = [];
        $argValues[] = $classReference;
        $argValues[] = $values[\Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS] ?? $values;
        $args = $this->argsNodeFactory->createFromValues($argValues, \true);
        $methodCall = new \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\MethodCall($servicesVariable, \Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS, $args);
        return new \_PhpScoper4fc0030e9d22\PhpParser\Node\Stmt\Expression($methodCall);
    }
    private function createFromAlias(string $className, string $key, \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\Variable $servicesVariable) : \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\MethodCall
    {
        $classReference = $this->commonNodeFactory->createClassReference($className);
        $args = $this->argsNodeFactory->createFromValues([$key, $classReference]);
        return new \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\MethodCall($servicesVariable, \Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS, $args);
    }
    /**
     * @param mixed[] $values
     */
    private function createFromArrayValues(array $values, string $key, \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\Variable $servicesVariable) : \_PhpScoper4fc0030e9d22\PhpParser\Node\Stmt\Expression
    {
        if (isset($values[\Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS])) {
            $methodCall = $this->createFromAlias($values[\Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS], $key, $servicesVariable);
            unset($values[\Symplify\PhpConfigPrinter\ValueObject\MethodName::ALIAS]);
        } else {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        /** @var MethodCall $methodCall */
        $methodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $methodCall);
        return new \_PhpScoper4fc0030e9d22\PhpParser\Node\Stmt\Expression($methodCall);
    }
}
