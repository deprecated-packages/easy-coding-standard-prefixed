<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfd70a7e8e84f\Symfony\Component\ErrorHandler\ErrorRenderer;

use _PhpScoperfd70a7e8e84f\Symfony\Component\ErrorHandler\Exception\FlattenException;
/**
 * Formats an exception to be used as response content.
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
interface ErrorRendererInterface
{
    /**
     * Renders a Throwable as a FlattenException.
     */
    public function render(\Throwable $exception) : \_PhpScoperfd70a7e8e84f\Symfony\Component\ErrorHandler\Exception\FlattenException;
}
