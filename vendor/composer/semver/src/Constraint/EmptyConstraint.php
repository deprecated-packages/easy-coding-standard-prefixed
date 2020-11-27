<?php

/*
 * This file is part of composer/semver.
 *
 * (c) Composer <https://github.com/composer>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */
namespace _PhpScoper578a67c80b2b\Composer\Semver\Constraint;

/**
 * Defines the absence of a constraint.
 */
class EmptyConstraint implements \_PhpScoper578a67c80b2b\Composer\Semver\Constraint\ConstraintInterface
{
    /** @var string */
    protected $prettyString;
    /**
     * @param ConstraintInterface $provider
     *
     * @return bool
     */
    public function matches(\_PhpScoper578a67c80b2b\Composer\Semver\Constraint\ConstraintInterface $provider)
    {
        return \true;
    }
    /**
     * @param $prettyString
     */
    public function setPrettyString($prettyString)
    {
        $this->prettyString = $prettyString;
    }
    /**
     * @return string
     */
    public function getPrettyString()
    {
        if ($this->prettyString) {
            return $this->prettyString;
        }
        return $this->__toString();
    }
    /**
     * @return string
     */
    public function __toString()
    {
        return '[]';
    }
}
