<?php

namespace _PhpScoperb26833cc184d;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use _PhpScoperb26833cc184d\Symfony\Polyfill\Ctype as p;
if (!\function_exists('ctype_alnum')) {
    function ctype_alnum($text)
    {
        return \_PhpScoperb26833cc184d\Symfony\Polyfill\Ctype\Ctype::ctype_alnum($text);
    }
    function ctype_alpha($text)
    {
        return \_PhpScoperb26833cc184d\Symfony\Polyfill\Ctype\Ctype::ctype_alpha($text);
    }
    function ctype_cntrl($text)
    {
        return \_PhpScoperb26833cc184d\Symfony\Polyfill\Ctype\Ctype::ctype_cntrl($text);
    }
    function ctype_digit($text)
    {
        return \_PhpScoperb26833cc184d\Symfony\Polyfill\Ctype\Ctype::ctype_digit($text);
    }
    function ctype_graph($text)
    {
        return \_PhpScoperb26833cc184d\Symfony\Polyfill\Ctype\Ctype::ctype_graph($text);
    }
    function ctype_lower($text)
    {
        return \_PhpScoperb26833cc184d\Symfony\Polyfill\Ctype\Ctype::ctype_lower($text);
    }
    function ctype_print($text)
    {
        return \_PhpScoperb26833cc184d\Symfony\Polyfill\Ctype\Ctype::ctype_print($text);
    }
    function ctype_punct($text)
    {
        return \_PhpScoperb26833cc184d\Symfony\Polyfill\Ctype\Ctype::ctype_punct($text);
    }
    function ctype_space($text)
    {
        return \_PhpScoperb26833cc184d\Symfony\Polyfill\Ctype\Ctype::ctype_space($text);
    }
    function ctype_upper($text)
    {
        return \_PhpScoperb26833cc184d\Symfony\Polyfill\Ctype\Ctype::ctype_upper($text);
    }
    function ctype_xdigit($text)
    {
        return \_PhpScoperb26833cc184d\Symfony\Polyfill\Ctype\Ctype::ctype_xdigit($text);
    }
}
