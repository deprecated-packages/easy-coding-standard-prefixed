<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScoperc7c7dddc9238\Symfony\Component\HttpFoundation\Request;
use _PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Yields a non-variadic argument's value from the request attributes.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class RequestAttributeValueResolver implements \_PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScoperc7c7dddc9238\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        return !$argument->isVariadic() && $request->attributes->has($argument->getName());
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScoperc7c7dddc9238\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        (yield $request->attributes->get($argument->getName()));
    }
}
