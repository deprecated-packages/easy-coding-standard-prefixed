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
namespace _PhpScopera04bf8e97c06\SebastianBergmann\Diff;

/**
 * @covers SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator
 */
final class TimeEfficientImplementationTest extends \_PhpScopera04bf8e97c06\SebastianBergmann\Diff\LongestCommonSubsequenceTest
{
    protected function createImplementation() : \_PhpScopera04bf8e97c06\SebastianBergmann\Diff\LongestCommonSubsequenceCalculator
    {
        return new \_PhpScopera04bf8e97c06\SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator();
    }
}
