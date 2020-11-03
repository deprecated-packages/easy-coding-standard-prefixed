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
namespace _PhpScoper2b44cb0c30af\SebastianBergmann\Diff;

/**
 * @covers SebastianBergmann\Diff\MemoryEfficientLongestCommonSubsequenceCalculator
 */
final class MemoryEfficientImplementationTest extends \_PhpScoper2b44cb0c30af\SebastianBergmann\Diff\LongestCommonSubsequenceTest
{
    protected function createImplementation() : \_PhpScoper2b44cb0c30af\SebastianBergmann\Diff\LongestCommonSubsequenceCalculator
    {
        return new \_PhpScoper2b44cb0c30af\SebastianBergmann\Diff\MemoryEfficientLongestCommonSubsequenceCalculator();
    }
}
