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
namespace _PhpScoperdc8fbcd7c69d\SebastianBergmann\Diff;

/**
 * @covers SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator
 */
final class TimeEfficientImplementationTest extends \_PhpScoperdc8fbcd7c69d\SebastianBergmann\Diff\LongestCommonSubsequenceTest
{
    protected function createImplementation() : \_PhpScoperdc8fbcd7c69d\SebastianBergmann\Diff\LongestCommonSubsequenceCalculator
    {
        return new \_PhpScoperdc8fbcd7c69d\SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator();
    }
}
