<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb26833cc184d\Symfony\Component\VarDumper\Caster;

use _PhpScoperb26833cc184d\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * Casts GMP objects to array representation.
 *
 * @author Hamza Amrouche <hamza.simperfit@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final since Symfony 4.4
 */
class GmpCaster
{
    public static function castGmp(\GMP $gmp, array $a, \_PhpScoperb26833cc184d\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested, $filter) : array
    {
        $a[\_PhpScoperb26833cc184d\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . 'value'] = new \_PhpScoperb26833cc184d\Symfony\Component\VarDumper\Caster\ConstStub(\gmp_strval($gmp), \gmp_strval($gmp));
        return $a;
    }
}
