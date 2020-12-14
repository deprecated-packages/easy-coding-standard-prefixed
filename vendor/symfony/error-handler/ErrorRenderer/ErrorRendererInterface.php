<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc64a4ac1af35\Symfony\Component\ErrorHandler\ErrorRenderer;

use _PhpScoperc64a4ac1af35\Symfony\Component\ErrorHandler\Exception\FlattenException;
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
    public function render(\Throwable $exception) : \_PhpScoperc64a4ac1af35\Symfony\Component\ErrorHandler\Exception\FlattenException;
}
