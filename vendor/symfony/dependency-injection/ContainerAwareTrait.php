<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper22e359cd1ab0\Symfony\Component\DependencyInjection;

/**
 * ContainerAware trait.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
trait ContainerAwareTrait
{
    /**
     * @var ContainerInterface
     */
    protected $container;
    public function setContainer(\_PhpScoper22e359cd1ab0\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}
