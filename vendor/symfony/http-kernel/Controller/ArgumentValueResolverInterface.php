<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Controller;

use _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpFoundation\Request;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
/**
 * Responsible for resolving the value of an argument based on its metadata.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
interface ArgumentValueResolverInterface
{
    /**
     * Whether this resolver can resolve the value for the given ArgumentMetadata.
     *
     * @return bool
     */
    public function supports(\_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument);
    /**
     * Returns the possible value(s).
     *
     * @return iterable
     */
    public function resolve(\_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument);
}
