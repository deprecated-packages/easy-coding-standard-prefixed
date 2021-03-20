<?php

/*
 * This file is part of composer/semver.
 *
 * (c) Composer <https://github.com/composer>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */
namespace _PhpScoperb0c6500a504c\Composer\Semver\Constraint;

/**
 * Defines the absence of a constraint.
 *
 * This constraint matches everything.
 */
class MatchAllConstraint implements \_PhpScoperb0c6500a504c\Composer\Semver\Constraint\ConstraintInterface
{
    /** @var string|null */
    protected $prettyString;
    /**
     * @param ConstraintInterface $provider
     *
     * @return bool
     */
    public function matches(\_PhpScoperb0c6500a504c\Composer\Semver\Constraint\ConstraintInterface $provider)
    {
        return \true;
    }
    public function compile($operator)
    {
        return 'true';
    }
    /**
     * @param string|null $prettyString
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
        return (string) $this;
    }
    /**
     * @return string
     */
    public function __toString()
    {
        return '*';
    }
    /**
     * {@inheritDoc}
     */
    public function getUpperBound()
    {
        return \_PhpScoperb0c6500a504c\Composer\Semver\Constraint\Bound::positiveInfinity();
    }
    /**
     * {@inheritDoc}
     */
    public function getLowerBound()
    {
        return \_PhpScoperb0c6500a504c\Composer\Semver\Constraint\Bound::zero();
    }
}
