<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercf327c47dfc5\Symfony\Component\HttpKernel\Controller;

use _PhpScopercf327c47dfc5\Symfony\Component\HttpFoundation\Request;
use _PhpScopercf327c47dfc5\Symfony\Component\Stopwatch\Stopwatch;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TraceableControllerResolver implements \_PhpScopercf327c47dfc5\Symfony\Component\HttpKernel\Controller\ControllerResolverInterface
{
    private $resolver;
    private $stopwatch;
    public function __construct(\_PhpScopercf327c47dfc5\Symfony\Component\HttpKernel\Controller\ControllerResolverInterface $resolver, \_PhpScopercf327c47dfc5\Symfony\Component\Stopwatch\Stopwatch $stopwatch)
    {
        $this->resolver = $resolver;
        $this->stopwatch = $stopwatch;
    }
    /**
     * {@inheritdoc}
     */
    public function getController(\_PhpScopercf327c47dfc5\Symfony\Component\HttpFoundation\Request $request)
    {
        $e = $this->stopwatch->start('controller.get_callable');
        $ret = $this->resolver->getController($request);
        $e->stop();
        return $ret;
    }
}
