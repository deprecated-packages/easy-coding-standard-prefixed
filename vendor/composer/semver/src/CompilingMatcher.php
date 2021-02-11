<?php

/*
 * This file is part of composer/semver.
 *
 * (c) Composer <https://github.com/composer>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */
namespace _PhpScoperef5048aa2573\Composer\Semver;

use _PhpScoperef5048aa2573\Composer\Semver\Constraint\Constraint;
use _PhpScoperef5048aa2573\Composer\Semver\Constraint\ConstraintInterface;
/**
 * Helper class to evaluate constraint by compiling and reusing the code to evaluate
 */
class CompilingMatcher
{
    private static $compiledCheckerCache = array();
    private static $enabled;
    /**
     * @phpstan-var array<Constraint::OP_*, string>
     */
    private static $transOpInt = array(\_PhpScoperef5048aa2573\Composer\Semver\Constraint\Constraint::OP_EQ => '==', \_PhpScoperef5048aa2573\Composer\Semver\Constraint\Constraint::OP_LT => '<', \_PhpScoperef5048aa2573\Composer\Semver\Constraint\Constraint::OP_LE => '<=', \_PhpScoperef5048aa2573\Composer\Semver\Constraint\Constraint::OP_GT => '>', \_PhpScoperef5048aa2573\Composer\Semver\Constraint\Constraint::OP_GE => '>=', \_PhpScoperef5048aa2573\Composer\Semver\Constraint\Constraint::OP_NE => '!=');
    /**
     * Evaluates the expression: $constraint match $operator $version
     *
     * @param ConstraintInterface $constraint
     * @param int                 $operator
     * @phpstan-param Constraint::OP_*  $operator
     * @param string              $version
     *
     * @return mixed
     */
    public static function match(\_PhpScoperef5048aa2573\Composer\Semver\Constraint\ConstraintInterface $constraint, $operator, $version)
    {
        if (self::$enabled === null) {
            self::$enabled = !\in_array('eval', \explode(',', \ini_get('disable_functions')), \true);
        }
        if (!self::$enabled) {
            return $constraint->matches(new \_PhpScoperef5048aa2573\Composer\Semver\Constraint\Constraint(self::$transOpInt[$operator], $version));
        }
        $cacheKey = $operator . $constraint;
        if (!isset(self::$compiledCheckerCache[$cacheKey])) {
            $code = $constraint->compile($operator);
            self::$compiledCheckerCache[$cacheKey] = $function = eval('return function($v, $b){return ' . $code . ';};');
        } else {
            $function = self::$compiledCheckerCache[$cacheKey];
        }
        return $function($version, \strpos($version, 'dev-') === 0);
    }
}
