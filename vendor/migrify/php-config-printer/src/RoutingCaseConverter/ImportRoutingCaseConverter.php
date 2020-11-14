<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\RoutingCaseConverter;

use _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\Contract\RoutingCaseConverterInterface;
use _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopera749ac204cd2\PhpParser\Node\Arg;
use _PhpScopera749ac204cd2\PhpParser\Node\Expr\MethodCall;
use _PhpScopera749ac204cd2\PhpParser\Node\Expr\Variable;
use _PhpScopera749ac204cd2\PhpParser\Node\Stmt\Expression;
use Symplify\PackageBuilder\Strings\StringFormatConverter;
final class ImportRoutingCaseConverter implements \_PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\Contract\RoutingCaseConverterInterface
{
    /**
     * @var string[]
     */
    private const NESTED_KEYS = ['name_prefix', 'defaults', 'requirements', 'options', 'utf8', 'condition', 'host', 'schemes', self::METHODS, 'controller', 'locale', 'format', 'stateless'];
    /**
     * @var string[]
     */
    private const IMPORT_ARGS = [self::RESOURCE, self::TYPE, self::EXCLUDE];
    /**
     * @var string[]
     */
    private const PREFIX_ARGS = [
        // Add prefix itself as first argument
        self::PREFIX,
        'trailing_slash_on_root',
    ];
    /**
     * @var string
     */
    private const PREFIX = 'prefix';
    /**
     * @var string
     */
    private const RESOURCE = 'resource';
    /**
     * @var string
     */
    private const TYPE = 'type';
    /**
     * @var string
     */
    private const EXCLUDE = 'exclude';
    /**
     * @var string
     */
    private const METHODS = 'methods';
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var StringFormatConverter
     */
    private $stringFormatConverter;
    public function __construct(\_PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->stringFormatConverter = new \Symplify\PackageBuilder\Strings\StringFormatConverter();
    }
    public function match(string $key, $values) : bool
    {
        return isset($values[self::RESOURCE]);
    }
    public function convertToMethodCall(string $key, $values) : \_PhpScopera749ac204cd2\PhpParser\Node\Stmt\Expression
    {
        $variable = new \_PhpScopera749ac204cd2\PhpParser\Node\Expr\Variable(\_PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        $args = $this->createAddArgs(self::IMPORT_ARGS, $values);
        $methodCall = new \_PhpScopera749ac204cd2\PhpParser\Node\Expr\MethodCall($variable, 'import', $args);
        // Handle prefix independently as it has specific args
        if (isset($values[self::PREFIX])) {
            $args = $this->createAddArgs(self::PREFIX_ARGS, $values);
            $methodCall = new \_PhpScopera749ac204cd2\PhpParser\Node\Expr\MethodCall($methodCall, self::PREFIX, $args);
        }
        foreach (self::NESTED_KEYS as $nestedKey) {
            if (!isset($values[$nestedKey])) {
                continue;
            }
            $nestedValues = $values[$nestedKey];
            // Transform methods as string GET|HEAD to array
            if ($nestedKey === self::METHODS && \is_string($nestedValues)) {
                $nestedValues = \explode('|', $nestedValues);
            }
            $args = $this->argsNodeFactory->createFromValues([$nestedValues]);
            $name = $this->stringFormatConverter->underscoreAndHyphenToCamelCase($nestedKey);
            $methodCall = new \_PhpScopera749ac204cd2\PhpParser\Node\Expr\MethodCall($methodCall, $name, $args);
        }
        return new \_PhpScopera749ac204cd2\PhpParser\Node\Stmt\Expression($methodCall);
    }
    /**
     * @param string[] $argsNames
     * @param mixed $values
     * @return Arg[]
     */
    private function createAddArgs(array $argsNames, $values) : array
    {
        $argumentValues = [];
        foreach ($argsNames as $arg) {
            if (isset($values[$arg])) {
                // Default $ignoreErrors to false before $exclude on import(), same behaviour as symfony
                if ($arg === self::EXCLUDE) {
                    $argumentValues[] = \false;
                }
                $argumentValues[] = $values[$arg];
            }
        }
        return $this->argsNodeFactory->createFromValues($argumentValues);
    }
}
