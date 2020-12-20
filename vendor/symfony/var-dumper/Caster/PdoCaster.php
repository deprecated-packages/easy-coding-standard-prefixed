<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperab9510cd5d97\Symfony\Component\VarDumper\Caster;

use _PhpScoperab9510cd5d97\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * Casts PDO related classes to array representation.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final since Symfony 4.4
 */
class PdoCaster
{
    private static $pdoAttributes = ['CASE' => [\PDO::CASE_LOWER => 'LOWER', \PDO::CASE_NATURAL => 'NATURAL', \PDO::CASE_UPPER => 'UPPER'], 'ERRMODE' => [\PDO::ERRMODE_SILENT => 'SILENT', \PDO::ERRMODE_WARNING => 'WARNING', \PDO::ERRMODE_EXCEPTION => 'EXCEPTION'], 'TIMEOUT', 'PREFETCH', 'AUTOCOMMIT', 'PERSISTENT', 'DRIVER_NAME', 'SERVER_INFO', 'ORACLE_NULLS' => [\PDO::NULL_NATURAL => 'NATURAL', \PDO::NULL_EMPTY_STRING => 'EMPTY_STRING', \PDO::NULL_TO_STRING => 'TO_STRING'], 'CLIENT_VERSION', 'SERVER_VERSION', 'STATEMENT_CLASS', 'EMULATE_PREPARES', 'CONNECTION_STATUS', 'STRINGIFY_FETCHES', 'DEFAULT_FETCH_MODE' => [\PDO::FETCH_ASSOC => 'ASSOC', \PDO::FETCH_BOTH => 'BOTH', \PDO::FETCH_LAZY => 'LAZY', \PDO::FETCH_NUM => 'NUM', \PDO::FETCH_OBJ => 'OBJ']];
    public static function castPdo(\PDO $c, array $a, \_PhpScoperab9510cd5d97\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
    {
        $attr = [];
        $errmode = $c->getAttribute(\PDO::ATTR_ERRMODE);
        $c->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        foreach (self::$pdoAttributes as $k => $v) {
            if (!isset($k[0])) {
                $k = $v;
                $v = [];
            }
            try {
                $attr[$k] = 'ERRMODE' === $k ? $errmode : $c->getAttribute(\constant('PDO::ATTR_' . $k));
                if ($v && isset($v[$attr[$k]])) {
                    $attr[$k] = new \_PhpScoperab9510cd5d97\Symfony\Component\VarDumper\Caster\ConstStub($v[$attr[$k]], $attr[$k]);
                }
            } catch (\Exception $e) {
            }
        }
        if (isset($attr[$k = 'STATEMENT_CLASS'][1])) {
            if ($attr[$k][1]) {
                $attr[$k][1] = new \_PhpScoperab9510cd5d97\Symfony\Component\VarDumper\Caster\ArgsStub($attr[$k][1], '__construct', $attr[$k][0]);
            }
            $attr[$k][0] = new \_PhpScoperab9510cd5d97\Symfony\Component\VarDumper\Caster\ClassStub($attr[$k][0]);
        }
        $prefix = \_PhpScoperab9510cd5d97\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL;
        $a += [$prefix . 'inTransaction' => \method_exists($c, 'inTransaction'), $prefix . 'errorInfo' => $c->errorInfo(), $prefix . 'attributes' => new \_PhpScoperab9510cd5d97\Symfony\Component\VarDumper\Caster\EnumStub($attr)];
        if ($a[$prefix . 'inTransaction']) {
            $a[$prefix . 'inTransaction'] = $c->inTransaction();
        } else {
            unset($a[$prefix . 'inTransaction']);
        }
        if (!isset($a[$prefix . 'errorInfo'][1], $a[$prefix . 'errorInfo'][2])) {
            unset($a[$prefix . 'errorInfo']);
        }
        $c->setAttribute(\PDO::ATTR_ERRMODE, $errmode);
        return $a;
    }
    public static function castPdoStatement(\PDOStatement $c, array $a, \_PhpScoperab9510cd5d97\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
    {
        $prefix = \_PhpScoperab9510cd5d97\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL;
        $a[$prefix . 'errorInfo'] = $c->errorInfo();
        if (!isset($a[$prefix . 'errorInfo'][1], $a[$prefix . 'errorInfo'][2])) {
            unset($a[$prefix . 'errorInfo']);
        }
        return $a;
    }
}
