<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory\Service;

use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Arg;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\MethodCall;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\Variable;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Scalar\String_;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Expression;
use Symplify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use Symplify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use Symplify\PhpConfigPrinter\ValueObject\VariableName;
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
    public function __construct(\Symplify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \Symplify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \Symplify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->argsNodeFactory = $argsNodeFactory;
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function createResource(string $serviceKey, array $serviceValues) : \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Expression
    {
        $servicesLoadMethodCall = $this->createServicesLoadMethodCall($serviceKey, $serviceValues);
        $servicesLoadMethodCall = $this->autoBindNodeFactory->createAutoBindCalls($serviceValues, $servicesLoadMethodCall, \Symplify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_SERVICE);
        if (!isset($serviceValues[self::EXCLUDE])) {
            return new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Expression($servicesLoadMethodCall);
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
        $excludeMethodCall = new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\MethodCall($servicesLoadMethodCall, self::EXCLUDE, $args);
        return new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Expression($excludeMethodCall);
    }
    private function createServicesLoadMethodCall(string $serviceKey, $serviceValues) : \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\MethodCall
    {
        $servicesVariable = new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $resource = $serviceValues['resource'];
        $args = [];
        $args[] = new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Arg(new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Scalar\String_($serviceKey));
        $args[] = new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Arg($this->commonNodeFactory->createAbsoluteDirExpr($resource));
        return new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\MethodCall($servicesVariable, 'load', $args);
    }
}
