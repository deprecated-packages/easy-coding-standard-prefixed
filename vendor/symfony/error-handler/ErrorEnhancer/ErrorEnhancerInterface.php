<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper807f8e74693b\Symfony\Component\ErrorHandler\ErrorEnhancer;

interface ErrorEnhancerInterface
{
    /**
     * Returns an \Throwable instance if the class is able to improve the error, null otherwise.
     */
    public function enhance(\Throwable $error) : ?\Throwable;
}
