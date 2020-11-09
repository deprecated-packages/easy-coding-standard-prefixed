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
namespace _PhpScopere015d8a3273c\SebastianBergmann\Diff;

/**
 * @covers SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator
 */
final class TimeEfficientImplementationTest extends \_PhpScopere015d8a3273c\SebastianBergmann\Diff\LongestCommonSubsequenceTest
{
    protected function createImplementation() : \_PhpScopere015d8a3273c\SebastianBergmann\Diff\LongestCommonSubsequenceCalculator
    {
        return new \_PhpScopere015d8a3273c\SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator();
    }
}
