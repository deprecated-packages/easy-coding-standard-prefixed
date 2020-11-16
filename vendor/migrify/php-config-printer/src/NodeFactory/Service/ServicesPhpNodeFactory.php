<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\Service;

use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperbcc0395698f8\PhpParser\Node\Arg;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\Variable;
use _PhpScoperbcc0395698f8\PhpParser\Node\Scalar\String_;
use _PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression;
final class ServicesPhpNodeFactory
{
    /**
     * @var string
     */
    private const EXCLUDE = 'exclude';
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->argsNodeFactory = $argsNodeFactory;
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function createResource(string $serviceKey, array $serviceValues) : \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression
    {
        $servicesLoadMethodCall = $this->createServicesLoadMethodCall($serviceKey, $serviceValues);
        $servicesLoadMethodCall = $this->autoBindNodeFactory->createAutoBindCalls($serviceValues, $servicesLoadMethodCall, \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_SERVICE);
        if (!isset($serviceValues[self::EXCLUDE])) {
            return new \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression($servicesLoadMethodCall);
        }
        $exclude = $serviceValues[self::EXCLUDE];
        if (!\is_array($exclude)) {
            $exclude = [$exclude];
        }
        $excludeValue = [];
        foreach ($exclude as $key => $singleExclude) {
            $excludeValue[$key] = $this->commonNodeFactory->createAbsoluteDirExpr($singleExclude);
        }
        $args = $this->argsNodeFactory->createFromValues([$excludeValue]);
        $excludeMethodCall = new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall($servicesLoadMethodCall, self::EXCLUDE, $args);
        return new \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression($excludeMethodCall);
    }
    private function createServicesLoadMethodCall(string $serviceKey, $serviceValues) : \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall
    {
        $servicesVariable = new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\Variable(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $resource = $serviceValues['resource'];
        $args = [];
        $args[] = new \_PhpScoperbcc0395698f8\PhpParser\Node\Arg(new \_PhpScoperbcc0395698f8\PhpParser\Node\Scalar\String_($serviceKey));
        $args[] = new \_PhpScoperbcc0395698f8\PhpParser\Node\Arg($this->commonNodeFactory->createAbsoluteDirExpr($resource));
        return new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall($servicesVariable, 'load', $args);
    }
}
