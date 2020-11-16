<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\Service;

use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperedc2e0c967db\PhpParser\Node\Arg;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\Variable;
use _PhpScoperedc2e0c967db\PhpParser\Node\Scalar\String_;
use _PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Expression;
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
    public function __construct(\_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->argsNodeFactory = $argsNodeFactory;
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function createResource(string $serviceKey, array $serviceValues) : \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Expression
    {
        $servicesLoadMethodCall = $this->createServicesLoadMethodCall($serviceKey, $serviceValues);
        $servicesLoadMethodCall = $this->autoBindNodeFactory->createAutoBindCalls($serviceValues, $servicesLoadMethodCall, \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_SERVICE);
        if (!isset($serviceValues[self::EXCLUDE])) {
            return new \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Expression($servicesLoadMethodCall);
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
        $excludeMethodCall = new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($servicesLoadMethodCall, self::EXCLUDE, $args);
        return new \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Expression($excludeMethodCall);
    }
    private function createServicesLoadMethodCall(string $serviceKey, $serviceValues) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall
    {
        $servicesVariable = new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\Variable(\_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $resource = $serviceValues['resource'];
        $args = [];
        $args[] = new \_PhpScoperedc2e0c967db\PhpParser\Node\Arg(new \_PhpScoperedc2e0c967db\PhpParser\Node\Scalar\String_($serviceKey));
        $args[] = new \_PhpScoperedc2e0c967db\PhpParser\Node\Arg($this->commonNodeFactory->createAbsoluteDirExpr($resource));
        return new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($servicesVariable, 'load', $args);
    }
}
