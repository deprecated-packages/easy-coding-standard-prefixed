<?php

namespace _PhpScopercae9e6ab5cea;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use _PhpScopercae9e6ab5cea\Symfony\Component\VarDumper\VarDumper;
if (!\function_exists('_PhpScopercae9e6ab5cea\\dump')) {
    /**
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function dump($var, ...$moreVars)
    {
        VarDumper::dump($var);
        foreach ($moreVars as $v) {
            VarDumper::dump($v);
        }
        if (1 < \func_num_args()) {
            return \func_get_args();
        }
        return $var;
    }
}
if (!\function_exists('_PhpScopercae9e6ab5cea\\dd')) {
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            VarDumper::dump($v);
        }
        exit(1);
    }
}
