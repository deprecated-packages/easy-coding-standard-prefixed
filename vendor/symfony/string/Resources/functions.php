<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd51690aa3091\Symfony\Component\String;

if (!\function_exists(\_PhpScoperd51690aa3091\Symfony\Component\String\u::class)) {
    function u(?string $string = '') : \_PhpScoperd51690aa3091\Symfony\Component\String\UnicodeString
    {
        return new \_PhpScoperd51690aa3091\Symfony\Component\String\UnicodeString($string ?? '');
    }
}
if (!\function_exists(\_PhpScoperd51690aa3091\Symfony\Component\String\b::class)) {
    function b(?string $string = '') : \_PhpScoperd51690aa3091\Symfony\Component\String\ByteString
    {
        return new \_PhpScoperd51690aa3091\Symfony\Component\String\ByteString($string ?? '');
    }
}
if (!\function_exists(\_PhpScoperd51690aa3091\Symfony\Component\String\s::class)) {
    /**
     * @return UnicodeString|ByteString
     */
    function s(?string $string = '') : \_PhpScoperd51690aa3091\Symfony\Component\String\AbstractString
    {
        $string = $string ?? '';
        return \preg_match('//u', $string) ? new \_PhpScoperd51690aa3091\Symfony\Component\String\UnicodeString($string) : new \_PhpScoperd51690aa3091\Symfony\Component\String\ByteString($string);
    }
}
