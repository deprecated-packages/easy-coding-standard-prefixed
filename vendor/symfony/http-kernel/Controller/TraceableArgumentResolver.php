<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc64a4ac1af35\Symfony\Component\HttpKernel\Controller;

use _PhpScoperc64a4ac1af35\Symfony\Component\HttpFoundation\Request;
use _PhpScoperc64a4ac1af35\Symfony\Component\Stopwatch\Stopwatch;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TraceableArgumentResolver implements \_PhpScoperc64a4ac1af35\Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface
{
    private $resolver;
    private $stopwatch;
    public function __construct(\_PhpScoperc64a4ac1af35\Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface $resolver, \_PhpScoperc64a4ac1af35\Symfony\Component\Stopwatch\Stopwatch $stopwatch)
    {
        $this->resolver = $resolver;
        $this->stopwatch = $stopwatch;
    }
    /**
     * {@inheritdoc}
     */
    public function getArguments(\_PhpScoperc64a4ac1af35\Symfony\Component\HttpFoundation\Request $request, $controller)
    {
        $e = $this->stopwatch->start('controller.get_arguments');
        $ret = $this->resolver->getArguments($request, $controller);
        $e->stop();
        return $ret;
    }
}
