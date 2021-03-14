<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Bootstrap;

use _PhpScopere050faf861e6\Symfony\Component\Console\Input\InputInterface;
use Symplify\EasyCodingStandard\Set\ConstantReflectionSetFactory;
use Symplify\EasyCodingStandard\Set\EasyCodingStandardSetProvider;
use Symplify\SetConfigResolver\SetAwareConfigResolver;
use Symplify\SetConfigResolver\ValueObject\Bootstrap\BootstrapConfigs;
final class ECSConfigsResolver
{
    /**
     * @var SetAwareConfigResolver
     */
    private $setAwareConfigResolver;
    public function __construct()
    {
        $easyCodingStandardSetProvider = new \Symplify\EasyCodingStandard\Set\EasyCodingStandardSetProvider(new \Symplify\EasyCodingStandard\Set\ConstantReflectionSetFactory());
        $this->setAwareConfigResolver = new \Symplify\SetConfigResolver\SetAwareConfigResolver($easyCodingStandardSetProvider);
    }
    public function resolveFromInput(\_PhpScopere050faf861e6\Symfony\Component\Console\Input\InputInterface $input) : \Symplify\SetConfigResolver\ValueObject\Bootstrap\BootstrapConfigs
    {
        $configFileInfos = [];
        $mainConfigFileInfo = $this->setAwareConfigResolver->resolveFromInputWithFallback($input, ['ecs.php']);
        if ($mainConfigFileInfo !== null) {
            // 2. "parameters > set" in provided yaml files
            $parameterSetsConfigs = $this->setAwareConfigResolver->resolveFromParameterSetsFromConfigFiles([$mainConfigFileInfo]);
            $configFileInfos = \array_merge($configFileInfos, $parameterSetsConfigs);
        }
        return new \Symplify\SetConfigResolver\ValueObject\Bootstrap\BootstrapConfigs($mainConfigFileInfo, $configFileInfos);
    }
}
