<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\CompilerPass;

use _PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symplify\EasyCodingStandard\ValueObject\Option;
final class RemoveExcludedCheckersCompilerPass implements \_PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $excludedCheckers = $this->getExcludedCheckersFromParameterBag($containerBuilder->getParameterBag());
        $definitions = $containerBuilder->getDefinitions();
        foreach ($definitions as $id => $definition) {
            if (!\in_array($definition->getClass(), $excludedCheckers, \true)) {
                continue;
            }
            $containerBuilder->removeDefinition($id);
        }
    }
    /**
     * @return array<int, class-string>
     */
    private function getExcludedCheckersFromParameterBag(\_PhpScoper745103eaabcd\Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface $parameterBag) : array
    {
        $excludedCheckers = [];
        // parts of "skip" parameter
        if ($parameterBag->has(\Symplify\EasyCodingStandard\ValueObject\Option::SKIP)) {
            $skip = $parameterBag->get(\Symplify\EasyCodingStandard\ValueObject\Option::SKIP);
            foreach ($skip as $key => $value) {
                if ($value !== null) {
                    continue;
                }
                if (!\class_exists($key)) {
                    continue;
                }
                $excludedCheckers[] = $key;
            }
        }
        return \array_unique($excludedCheckers);
    }
}
