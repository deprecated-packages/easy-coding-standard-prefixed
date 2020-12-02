<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper2d2a405cc0f8\Symfony\Component\HttpKernel\Exception;

/**
 * @author Ben Ramsey <ben@benramsey.com>
 */
class NotAcceptableHttpException extends \_PhpScoper2d2a405cc0f8\Symfony\Component\HttpKernel\Exception\HttpException
{
    /**
     * @param string     $message  The internal exception message
     * @param \Throwable $previous The previous exception
     * @param int        $code     The internal exception code
     */
    public function __construct(string $message = null, \Throwable $previous = null, int $code = 0, array $headers = [])
    {
        parent::__construct(406, $message, $previous, $headers, $code);
    }
}
