<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\Service;

use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Arg;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Variable;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Scalar\String_;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Stmt\Expression;
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
    public function __construct(\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->argsNodeFactory = $argsNodeFactory;
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function createResource(string $serviceKey, array $serviceValues) : \_PhpScoperc753ccca5a0c\PhpParser\Node\Stmt\Expression
    {
        $servicesLoadMethodCall = $this->createServicesLoadMethodCall($serviceKey, $serviceValues);
        $servicesLoadMethodCall = $this->autoBindNodeFactory->createAutoBindCalls($serviceValues, $servicesLoadMethodCall, \_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_SERVICE);
        if (!isset($serviceValues[self::EXCLUDE])) {
            return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Stmt\Expression($servicesLoadMethodCall);
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
        $excludeMethodCall = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall($servicesLoadMethodCall, self::EXCLUDE, $args);
        return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Stmt\Expression($excludeMethodCall);
    }
    private function createServicesLoadMethodCall(string $serviceKey, $serviceValues) : \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall
    {
        $servicesVariable = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Variable(\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $resource = $serviceValues['resource'];
        $args = [];
        $args[] = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Arg(new \_PhpScoperc753ccca5a0c\PhpParser\Node\Scalar\String_($serviceKey));
        $args[] = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Arg($this->commonNodeFactory->createAbsoluteDirExpr($resource));
        return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall($servicesVariable, 'load', $args);
    }
}
