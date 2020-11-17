<?php

declare (strict_types=1);
namespace _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\NodeFactory\Service;

use _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoper967c4b7e296e\Nette\Utils\Strings;
use _PhpScoper967c4b7e296e\PhpParser\Node\Expr\MethodCall;
final class ServiceOptionNodeFactory
{
    /**
     * @var ServiceOptionsKeyYamlToPhpFactoryInterface[]
     */
    private $serviceOptionKeyYamlToPhpFactories = [];
    /**
     * @param ServiceOptionsKeyYamlToPhpFactoryInterface[] $serviceOptionKeyYamlToPhpFactories
     */
    public function __construct(array $serviceOptionKeyYamlToPhpFactories)
    {
        $this->serviceOptionKeyYamlToPhpFactories = $serviceOptionKeyYamlToPhpFactories;
    }
    public function convertServiceOptionsToNodes(array $servicesValues, \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\MethodCall
    {
        $servicesValues = $this->unNestArguments($servicesValues);
        foreach ($servicesValues as $key => $value) {
            // options started by decoration_<option> are used as options of the method decorate().
            if (\_PhpScoper967c4b7e296e\Nette\Utils\Strings::startsWith($key, 'decoration_') || $key === 'alias') {
                continue;
            }
            foreach ($this->serviceOptionKeyYamlToPhpFactories as $serviceOptionKeyYamlToPhpFactory) {
                if (!$serviceOptionKeyYamlToPhpFactory->isMatch($key, $value)) {
                    continue;
                }
                $methodCall = $serviceOptionKeyYamlToPhpFactory->decorateServiceMethodCall($key, $value, $servicesValues, $methodCall);
                continue 2;
            }
        }
        return $methodCall;
    }
    private function isNestedArguments(array $servicesValues) : bool
    {
        if (\count($servicesValues) === 0) {
            return \false;
        }
        foreach (\array_keys($servicesValues) as $key) {
            if (!\_PhpScoper967c4b7e296e\Nette\Utils\Strings::startsWith((string) $key, '$')) {
                return \false;
            }
        }
        return \true;
    }
    private function unNestArguments(array $servicesValues) : array
    {
        if (!$this->isNestedArguments($servicesValues)) {
            return $servicesValues;
        }
        return [\_PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::ARGUMENTS => $servicesValues];
    }
}
