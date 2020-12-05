<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper81b3ff5ab9fe\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScoper81b3ff5ab9fe\Symfony\Component\HttpFoundation\Request;
use _PhpScoper81b3ff5ab9fe\Symfony\Component\HttpFoundation\Session\SessionInterface;
use _PhpScoper81b3ff5ab9fe\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScoper81b3ff5ab9fe\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Yields the Session.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class SessionValueResolver implements \_PhpScoper81b3ff5ab9fe\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScoper81b3ff5ab9fe\Symfony\Component\HttpFoundation\Request $request, \_PhpScoper81b3ff5ab9fe\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        if (!$request->hasSession()) {
            return \false;
        }
        $type = $argument->getType();
        if (\_PhpScoper81b3ff5ab9fe\Symfony\Component\HttpFoundation\Session\SessionInterface::class !== $type && !\is_subclass_of($type, \_PhpScoper81b3ff5ab9fe\Symfony\Component\HttpFoundation\Session\SessionInterface::class)) {
            return \false;
        }
        return $request->getSession() instanceof $type;
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScoper81b3ff5ab9fe\Symfony\Component\HttpFoundation\Request $request, \_PhpScoper81b3ff5ab9fe\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        (yield $request->getSession());
    }
}
