<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd32e35cfad84\Symfony\Component\HttpKernel\Controller;

use _PhpScoperd32e35cfad84\Symfony\Component\HttpFoundation\Request;
use _PhpScoperd32e35cfad84\Symfony\Component\Stopwatch\Stopwatch;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TraceableArgumentResolver implements \_PhpScoperd32e35cfad84\Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface
{
    private $resolver;
    private $stopwatch;
    public function __construct(\_PhpScoperd32e35cfad84\Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface $resolver, \_PhpScoperd32e35cfad84\Symfony\Component\Stopwatch\Stopwatch $stopwatch)
    {
        $this->resolver = $resolver;
        $this->stopwatch = $stopwatch;
    }
    /**
     * {@inheritdoc}
     */
    public function getArguments(\_PhpScoperd32e35cfad84\Symfony\Component\HttpFoundation\Request $request, callable $controller)
    {
        $e = $this->stopwatch->start('controller.get_arguments');
        $ret = $this->resolver->getArguments($request, $controller);
        $e->stop();
        return $ret;
    }
}
