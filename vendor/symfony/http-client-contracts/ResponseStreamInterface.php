<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercae9e6ab5cea\Symfony\Contracts\HttpClient;

/**
 * Yields response chunks, returned by HttpClientInterface::stream().
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface ResponseStreamInterface extends \Iterator
{
    public function key() : \_PhpScopercae9e6ab5cea\Symfony\Contracts\HttpClient\ResponseInterface;
    public function current() : \_PhpScopercae9e6ab5cea\Symfony\Contracts\HttpClient\ChunkInterface;
}
