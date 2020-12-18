<?php

namespace _PhpScoperd8b12759ee0d;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use _PhpScoperd8b12759ee0d\Symfony\Component\VarDumper\VarDumper;
if (!\function_exists('_PhpScoperd8b12759ee0d\\dump')) {
    /**
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function dump($var, ...$moreVars)
    {
        \_PhpScoperd8b12759ee0d\Symfony\Component\VarDumper\VarDumper::dump($var);
        foreach ($moreVars as $v) {
            \_PhpScoperd8b12759ee0d\Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        if (1 < \func_num_args()) {
            return \func_get_args();
        }
        return $var;
    }
}
if (!\function_exists('_PhpScoperd8b12759ee0d\\dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            \_PhpScoperd8b12759ee0d\Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        die(1);
    }
}
