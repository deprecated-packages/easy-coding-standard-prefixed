<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere72a8aaba560\Symfony\Component\DependencyInjection\Config;

use _PhpScopere72a8aaba560\Symfony\Component\Config\Resource\ResourceInterface;
use _PhpScopere72a8aaba560\Symfony\Component\Config\ResourceCheckerInterface;
use _PhpScopere72a8aaba560\Symfony\Component\DependencyInjection\ContainerInterface;
/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ContainerParametersResourceChecker implements ResourceCheckerInterface
{
    /** @var ContainerInterface */
    private $container;
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    /**
     * {@inheritdoc}
     */
    public function supports(ResourceInterface $metadata)
    {
        return $metadata instanceof \_PhpScopere72a8aaba560\Symfony\Component\DependencyInjection\Config\ContainerParametersResource;
    }
    /**
     * {@inheritdoc}
     */
    public function isFresh(ResourceInterface $resource, int $timestamp)
    {
        foreach ($resource->getParameters() as $key => $value) {
            if (!$this->container->hasParameter($key) || $this->container->getParameter($key) !== $value) {
                return \false;
            }
        }
        return \true;
    }
}
