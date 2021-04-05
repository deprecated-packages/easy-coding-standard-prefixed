<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf5c57eca8aae\Symfony\Component\String;

if (!\function_exists(\_PhpScoperf5c57eca8aae\Symfony\Component\String\u::class)) {
    function u(?string $string = '') : \_PhpScoperf5c57eca8aae\Symfony\Component\String\UnicodeString
    {
        return new \_PhpScoperf5c57eca8aae\Symfony\Component\String\UnicodeString($string ?? '');
    }
}
if (!\function_exists(\_PhpScoperf5c57eca8aae\Symfony\Component\String\b::class)) {
    function b(?string $string = '') : \_PhpScoperf5c57eca8aae\Symfony\Component\String\ByteString
    {
        return new \_PhpScoperf5c57eca8aae\Symfony\Component\String\ByteString($string ?? '');
    }
}
if (!\function_exists(\_PhpScoperf5c57eca8aae\Symfony\Component\String\s::class)) {
    /**
     * @return UnicodeString|ByteString
     */
    function s(?string $string = '') : \_PhpScoperf5c57eca8aae\Symfony\Component\String\AbstractString
    {
        $string = $string ?? '';
        return \preg_match('//u', $string) ? new \_PhpScoperf5c57eca8aae\Symfony\Component\String\UnicodeString($string) : new \_PhpScoperf5c57eca8aae\Symfony\Component\String\ByteString($string);
    }
}
