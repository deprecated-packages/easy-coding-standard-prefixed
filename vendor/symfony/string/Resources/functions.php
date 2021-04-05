<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper457dd3bd73ba\Symfony\Component\String;

if (!\function_exists(\_PhpScoper457dd3bd73ba\Symfony\Component\String\u::class)) {
    function u(?string $string = '') : \_PhpScoper457dd3bd73ba\Symfony\Component\String\UnicodeString
    {
        return new \_PhpScoper457dd3bd73ba\Symfony\Component\String\UnicodeString($string ?? '');
    }
}
if (!\function_exists(\_PhpScoper457dd3bd73ba\Symfony\Component\String\b::class)) {
    function b(?string $string = '') : \_PhpScoper457dd3bd73ba\Symfony\Component\String\ByteString
    {
        return new \_PhpScoper457dd3bd73ba\Symfony\Component\String\ByteString($string ?? '');
    }
}
if (!\function_exists(\_PhpScoper457dd3bd73ba\Symfony\Component\String\s::class)) {
    /**
     * @return UnicodeString|ByteString
     */
    function s(?string $string = '') : \_PhpScoper457dd3bd73ba\Symfony\Component\String\AbstractString
    {
        $string = $string ?? '';
        return \preg_match('//u', $string) ? new \_PhpScoper457dd3bd73ba\Symfony\Component\String\UnicodeString($string) : new \_PhpScoper457dd3bd73ba\Symfony\Component\String\ByteString($string);
    }
}
