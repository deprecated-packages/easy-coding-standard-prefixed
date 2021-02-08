<?php

namespace _PhpScoper7faa8deb0d3c;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use _PhpScoper7faa8deb0d3c\Symfony\Component\VarDumper\VarDumper;
if (!\function_exists('_PhpScoper7faa8deb0d3c\\dump')) {
    /**
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function dump($var, ...$moreVars)
    {
        \_PhpScoper7faa8deb0d3c\Symfony\Component\VarDumper\VarDumper::dump($var);
        foreach ($moreVars as $v) {
            \_PhpScoper7faa8deb0d3c\Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        if (1 < \func_num_args()) {
            return \func_get_args();
        }
        return $var;
    }
}
if (!\function_exists('_PhpScoper7faa8deb0d3c\\dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            \_PhpScoper7faa8deb0d3c\Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        exit(1);
    }
}
