<?php

declare (strict_types=1);
namespace _PhpScoper0c236037eb04\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper0c236037eb04\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper0c236037eb04\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper0c236037eb04\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoper0c236037eb04\Nette\Utils\Strings;
use _PhpScoper0c236037eb04\PhpParser\Node\Expr\MethodCall;
final class ArgumentsServiceOptionKeyYamlToPhpFactory implements \_PhpScoper0c236037eb04\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoper0c236037eb04\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper0c236037eb04\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper0c236037eb04\PhpParser\Node\Expr\MethodCall
    {
        if (!$this->hasNamedArguments($yaml)) {
            $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
            return new \_PhpScoper0c236037eb04\PhpParser\Node\Expr\MethodCall($methodCall, 'args', $args);
        }
        foreach ($yaml as $key => $value) {
            $args = $this->argsNodeFactory->createFromValues([$key, $value], \false, \true);
            $methodCall = new \_PhpScoper0c236037eb04\PhpParser\Node\Expr\MethodCall($methodCall, 'arg', $args);
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoper0c236037eb04\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::ARGUMENTS;
    }
    private function hasNamedArguments(array $data) : bool
    {
        if (\count($data) === 0) {
            return \false;
        }
        foreach (\array_keys($data) as $key) {
            if (!\_PhpScoper0c236037eb04\Nette\Utils\Strings::startsWith((string) $key, '$')) {
                return \false;
            }
        }
        return \true;
    }
}
