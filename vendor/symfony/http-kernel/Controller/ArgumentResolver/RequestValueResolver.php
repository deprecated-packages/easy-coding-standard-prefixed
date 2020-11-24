<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfd70a7e8e84f\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScoperfd70a7e8e84f\Symfony\Component\HttpFoundation\Request;
use _PhpScoperfd70a7e8e84f\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScoperfd70a7e8e84f\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Yields the same instance as the request object passed along.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class RequestValueResolver implements \_PhpScoperfd70a7e8e84f\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScoperfd70a7e8e84f\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperfd70a7e8e84f\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        return \_PhpScoperfd70a7e8e84f\Symfony\Component\HttpFoundation\Request::class === $argument->getType() || \is_subclass_of($argument->getType(), \_PhpScoperfd70a7e8e84f\Symfony\Component\HttpFoundation\Request::class);
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScoperfd70a7e8e84f\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperfd70a7e8e84f\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        (yield $request);
    }
}
