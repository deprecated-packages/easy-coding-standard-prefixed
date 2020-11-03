<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper61bdb485188f\Symfony\Component\Config\Resource;

use _PhpScoper61bdb485188f\Symfony\Component\Config\ResourceCheckerInterface;
/**
 * Resource checker for instances of SelfCheckingResourceInterface.
 *
 * As these resources perform the actual check themselves, we can provide
 * this class as a standard way of validating them.
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class SelfCheckingResourceChecker implements \_PhpScoper61bdb485188f\Symfony\Component\Config\ResourceCheckerInterface
{
    public function supports(\_PhpScoper61bdb485188f\Symfony\Component\Config\Resource\ResourceInterface $metadata)
    {
        return $metadata instanceof \_PhpScoper61bdb485188f\Symfony\Component\Config\Resource\SelfCheckingResourceInterface;
    }
    public function isFresh(\_PhpScoper61bdb485188f\Symfony\Component\Config\Resource\ResourceInterface $resource, $timestamp)
    {
        /* @var SelfCheckingResourceInterface $resource */
        return $resource->isFresh($timestamp);
    }
}
