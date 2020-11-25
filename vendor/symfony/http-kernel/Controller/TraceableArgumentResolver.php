<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaac5f7c652e4\Symfony\Component\HttpKernel\Controller;

use _PhpScoperaac5f7c652e4\Symfony\Component\HttpFoundation\Request;
use _PhpScoperaac5f7c652e4\Symfony\Component\Stopwatch\Stopwatch;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TraceableArgumentResolver implements \_PhpScoperaac5f7c652e4\Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface
{
    private $resolver;
    private $stopwatch;
    public function __construct(\_PhpScoperaac5f7c652e4\Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface $resolver, \_PhpScoperaac5f7c652e4\Symfony\Component\Stopwatch\Stopwatch $stopwatch)
    {
        $this->resolver = $resolver;
        $this->stopwatch = $stopwatch;
    }
    /**
     * {@inheritdoc}
     */
    public function getArguments(\_PhpScoperaac5f7c652e4\Symfony\Component\HttpFoundation\Request $request, $controller)
    {
        $e = $this->stopwatch->start('controller.get_arguments');
        $ret = $this->resolver->getArguments($request, $controller);
        $e->stop();
        return $ret;
    }
}
