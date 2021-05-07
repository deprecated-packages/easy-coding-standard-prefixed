<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\CompilerPass;

use _PhpScoper91fe47cd7f25\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper91fe47cd7f25\Symfony\Component\DependencyInjection\ContainerBuilder;
use Symplify\EasyCodingStandard\ValueObject\Option;
final class DeprecationWarningCompilerPass implements CompilerPassInterface
{
    /**
     * @var array<string, string>
     */
    private const DEPRECATED_PARAMETERS = [Option::SETS => 'Use $containerConfigurator->import(<set>); instead'];
    public function process(ContainerBuilder $containerBuilder) : void
    {
        $parametersBag = $containerBuilder->getParameterBag();
        foreach (self::DEPRECATED_PARAMETERS as $parameter => $message) {
            if (!$parametersBag->has($parameter)) {
                continue;
            }
            $setsParameters = $parametersBag->get($parameter);
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
