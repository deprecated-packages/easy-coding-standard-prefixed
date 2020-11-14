<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperb09c3ec8e01a\Nette\Utils\Strings;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall;
final class ArgumentsServiceOptionKeyYamlToPhpFactory implements \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall
    {
        if (!$this->hasNamedArguments($yaml)) {
            $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
            return new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall($methodCall, 'args', $args);
        }
        foreach ($yaml as $key => $value) {
            $args = $this->argsNodeFactory->createFromValues([$key, $value], \false, \true);
            $methodCall = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall($methodCall, 'arg', $args);
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::ARGUMENTS;
    }
    private function hasNamedArguments(array $data) : bool
    {
        if (\count($data) === 0) {
            return \false;
        }
        foreach (\array_keys($data) as $key) {
            if (!\_PhpScoperb09c3ec8e01a\Nette\Utils\Strings::startsWith((string) $key, '$')) {
                return \false;
            }
        }
        return \true;
    }
}
