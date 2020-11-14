<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\Service;

use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopercda2b863d098\PhpParser\Node\Arg;
use _PhpScopercda2b863d098\PhpParser\Node\Expr\MethodCall;
use _PhpScopercda2b863d098\PhpParser\Node\Expr\Variable;
use _PhpScopercda2b863d098\PhpParser\Node\Scalar\String_;
use _PhpScopercda2b863d098\PhpParser\Node\Stmt\Expression;
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
    public function __construct(\_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->argsNodeFactory = $argsNodeFactory;
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function createResource(string $serviceKey, array $serviceValues) : \_PhpScopercda2b863d098\PhpParser\Node\Stmt\Expression
    {
        $servicesLoadMethodCall = $this->createServicesLoadMethodCall($serviceKey, $serviceValues);
        $servicesLoadMethodCall = $this->autoBindNodeFactory->createAutoBindCalls($serviceValues, $servicesLoadMethodCall, \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_SERVICE);
        if (!isset($serviceValues[self::EXCLUDE])) {
            return new \_PhpScopercda2b863d098\PhpParser\Node\Stmt\Expression($servicesLoadMethodCall);
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
        $excludeMethodCall = new \_PhpScopercda2b863d098\PhpParser\Node\Expr\MethodCall($servicesLoadMethodCall, self::EXCLUDE, $args);
        return new \_PhpScopercda2b863d098\PhpParser\Node\Stmt\Expression($excludeMethodCall);
    }
    private function createServicesLoadMethodCall(string $serviceKey, $serviceValues) : \_PhpScopercda2b863d098\PhpParser\Node\Expr\MethodCall
    {
        $servicesVariable = new \_PhpScopercda2b863d098\PhpParser\Node\Expr\Variable(\_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $resource = $serviceValues['resource'];
        $args = [];
        $args[] = new \_PhpScopercda2b863d098\PhpParser\Node\Arg(new \_PhpScopercda2b863d098\PhpParser\Node\Scalar\String_($serviceKey));
        $args[] = new \_PhpScopercda2b863d098\PhpParser\Node\Arg($this->commonNodeFactory->createAbsoluteDirExpr($resource));
        return new \_PhpScopercda2b863d098\PhpParser\Node\Expr\MethodCall($servicesVariable, 'load', $args);
    }
}
