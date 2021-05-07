<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\CompilerPass;

use _PhpScopercae9e6ab5cea\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScopercae9e6ab5cea\Symfony\Component\DependencyInjection\ContainerBuilder;
use Symplify\EasyCodingStandard\ValueObject\Option;
final class DeprecationWarningCompilerPass implements CompilerPassInterface
{
    /**
     * @var array<string, string>
     */
    private const DEPRECATED_PARAMETERS = [Option::SETS => 'Use $containerConfigurator->import(<set>); instead'];
    public function process(ContainerBuilder $containerBuilder) : void
    {
        $parameterBag = $containerBuilder->getParameterBag();
        foreach (self::DEPRECATED_PARAMETERS as $parameter => $message) {
            $parameterBagHas = $parameterBag->has($parameter);
            if (!$parameterBagHas) {
                continue;
            }
            $setsParameters = $parameterBag->get($parameter);
            if ($setsParameters === []) {
                continue;
            }
            $message = \sprintf('The "%s" parameter is deprecated. %s', $parameter, $message);
            \trigger_error($message);
            // to make it noticable
            \sleep(2);
        }
    }
}
