<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper4edd80b4ab80\Symfony\Polyfill\Php72;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class Php72
{
    public static function stream_isatty($stream)
    {
        return \function_exists('posix_isatty') && @\posix_isatty($stream);
    }
    public static function sapi_windows_vt100_support()
    {
        return \false;
    }
    public static function utf8_encode($s)
    {
        $s .= $s;
        $len = \strlen($s);
        for ($i = $len >> 1, $j = 0; $i < $len; ++$i, ++$j) {
            switch (\true) {
                case $s[$i] < "€":
                    $s[$j] = $s[$i];
                    break;
                case $s[$i] < "À":
                    $s[$j] = "Â";
                    $s[++$j] = $s[$i];
                    break;
                default:
                    $s[$j] = "Ã";
                    $s[++$j] = \chr(\ord($s[$i]) - 64);
                    break;
            }
        }
        return \substr($s, 0, $j);
    }
    public static function utf8_decode($s)
    {
        $s .= '';
        $len = \strlen($s);
        for ($i = 0, $j = 0; $i < $len; ++$i, ++$j) {
            switch ($s[$i] & "ð") {
                case "À":
                case "Ð":
                    $c = \ord($s[$i] & "\37") << 6 | \ord($s[++$i] & "?");
                    $s[$j] = $c < 256 ? \chr($c) : '?';
                    break;
                case "ð":
                    ++$i;
                case "à":
                    $s[$j] = '?';
                    $i += 2;
                    break;
                default:
                    $s[$j] = $s[$i];
            }
        }
        return \substr($s, 0, $j);
    }
}
