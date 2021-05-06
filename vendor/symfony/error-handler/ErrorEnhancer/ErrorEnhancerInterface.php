<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper3c4e863e8a34\Symfony\Component\ErrorHandler\ErrorEnhancer;

interface ErrorEnhancerInterface
{
    /**
     * Returns an \Throwable instance if the class is able to improve the error, null otherwise.
     */
    public function enhance(\Throwable $error) : ?\Throwable;
}
