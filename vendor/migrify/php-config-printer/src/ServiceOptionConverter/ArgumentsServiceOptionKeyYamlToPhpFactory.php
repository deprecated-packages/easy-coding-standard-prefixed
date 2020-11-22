<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperfacc742d2745\Nette\Utils\Strings;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall;
final class ArgumentsServiceOptionKeyYamlToPhpFactory implements \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall
    {
        if (!$this->hasNamedArguments($yaml)) {
            $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
            return new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall($methodCall, 'args', $args);
        }
        foreach ($yaml as $key => $value) {
            $args = $this->argsNodeFactory->createFromValues([$key, $value], \false, \true);
            $methodCall = new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall($methodCall, 'arg', $args);
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::ARGUMENTS;
    }
    private function hasNamedArguments(array $data) : bool
    {
        if (\count($data) === 0) {
            return \false;
        }
        foreach (\array_keys($data) as $key) {
            if (!\_PhpScoperfacc742d2745\Nette\Utils\Strings::startsWith((string) $key, '$')) {
                return \false;
            }
        }
        return \true;
    }
}
