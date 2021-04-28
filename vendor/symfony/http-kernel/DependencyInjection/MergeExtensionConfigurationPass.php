<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdb89411b20b4\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperdb89411b20b4\Symfony\Component\DependencyInjection\Compiler\MergeExtensionConfigurationPass as BaseMergeExtensionConfigurationPass;
use _PhpScoperdb89411b20b4\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * Ensures certain extensions are always loaded.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class MergeExtensionConfigurationPass extends BaseMergeExtensionConfigurationPass
{
    private $extensions;
    public function __construct(array $extensions)
    {
        $this->extensions = $extensions;
    }
    public function process(ContainerBuilder $container)
    {
        foreach ($this->extensions as $extension) {
            if (!\count($container->getExtensionConfig($extension))) {
                $container->loadFromExtension($extension, []);
            }
        }
        parent::process($container);
    }
}
