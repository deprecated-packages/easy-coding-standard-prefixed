<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd1a5bf00e83e\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScoperd1a5bf00e83e\Symfony\Component\HttpFoundation\Request;
use _PhpScoperd1a5bf00e83e\Symfony\Component\HttpFoundation\Session\SessionInterface;
use _PhpScoperd1a5bf00e83e\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScoperd1a5bf00e83e\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Yields the Session.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class SessionValueResolver implements \_PhpScoperd1a5bf00e83e\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScoperd1a5bf00e83e\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperd1a5bf00e83e\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        if (!$request->hasSession()) {
            return \false;
        }
        $type = $argument->getType();
        if (\_PhpScoperd1a5bf00e83e\Symfony\Component\HttpFoundation\Session\SessionInterface::class !== $type && !\is_subclass_of($type, \_PhpScoperd1a5bf00e83e\Symfony\Component\HttpFoundation\Session\SessionInterface::class)) {
            return \false;
        }
        return $request->getSession() instanceof $type;
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScoperd1a5bf00e83e\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperd1a5bf00e83e\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        (yield $request->getSession());
    }
}
