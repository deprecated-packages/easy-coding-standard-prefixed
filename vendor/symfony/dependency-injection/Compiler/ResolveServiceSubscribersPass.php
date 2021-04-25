<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper96c81c3c1716\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoper96c81c3c1716\Psr\Container\ContainerInterface;
use _PhpScoper96c81c3c1716\Symfony\Component\DependencyInjection\Definition;
use _PhpScoper96c81c3c1716\Symfony\Component\DependencyInjection\Reference;
use _PhpScoper96c81c3c1716\Symfony\Contracts\Service\ServiceProviderInterface;
/**
 * Compiler pass to inject their service locator to service subscribers.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ResolveServiceSubscribersPass extends \_PhpScoper96c81c3c1716\Symfony\Component\DependencyInjection\Compiler\AbstractRecursivePass
{
    private $serviceLocator;
    protected function processValue($value, bool $isRoot = \false)
    {
        if ($value instanceof Reference && $this->serviceLocator && \in_array((string) $value, [ContainerInterface::class, ServiceProviderInterface::class], \true)) {
            return new Reference($this->serviceLocator);
        }
        if (!$value instanceof Definition) {
            return parent::processValue($value, $isRoot);
        }
        $serviceLocator = $this->serviceLocator;
        $this->serviceLocator = null;
        if ($value->hasTag('container.service_subscriber.locator')) {
            $this->serviceLocator = $value->getTag('container.service_subscriber.locator')[0]['id'];
            $value->clearTag('container.service_subscriber.locator');
        }
        try {
            return parent::processValue($value);
        } finally {
            $this->serviceLocator = $serviceLocator;
        }
    }
}
