<?php

declare (strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera88a8b9f064a\SebastianBergmann\Diff;

/**
 * @covers SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator
 */
final class TimeEfficientImplementationTest extends \_PhpScopera88a8b9f064a\SebastianBergmann\Diff\LongestCommonSubsequenceTest
{
    protected function createImplementation() : \_PhpScopera88a8b9f064a\SebastianBergmann\Diff\LongestCommonSubsequenceCalculator
    {
        return new \_PhpScopera88a8b9f064a\SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator();
    }
}
