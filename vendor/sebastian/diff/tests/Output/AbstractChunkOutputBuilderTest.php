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
namespace _PhpScoper21763e6c7ac4\SebastianBergmann\Diff\Output;

use _PhpScoper21763e6c7ac4\PHPUnit\Framework\TestCase;
use _PhpScoper21763e6c7ac4\SebastianBergmann\Diff\Differ;
/**
 * @covers SebastianBergmann\Diff\Output\AbstractChunkOutputBuilder
 *
 * @uses SebastianBergmann\Diff\Differ
 * @uses SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder
 * @uses SebastianBergmann\Diff\TimeEfficientLongestCommonSubsequenceCalculator
 */
final class AbstractChunkOutputBuilderTest extends \_PhpScoper21763e6c7ac4\PHPUnit\Framework\TestCase
{
    /**
     * @param array  $expected
     * @param string $from
     * @param string $to
     * @param int    $lineThreshold
     *
     * @dataProvider provideGetCommonChunks
     */
    public function testGetCommonChunks(array $expected, string $from, string $to, int $lineThreshold = 5) : void
    {
        $output = new class extends \_PhpScoper21763e6c7ac4\SebastianBergmann\Diff\Output\AbstractChunkOutputBuilder
        {
            public function getDiff(array $diff) : string
            {
                return '';
            }
            public function getChunks(array $diff, $lineThreshold)
            {
                return $this->getCommonChunks($diff, $lineThreshold);
            }
        };
        $this->assertSame($expected, $output->getChunks((new \_PhpScoper21763e6c7ac4\SebastianBergmann\Diff\Differ())->diffToArray($from, $to), $lineThreshold));
    }
    public function provideGetCommonChunks() : array
    {
        return ['same (with default threshold)' => [[], 'A', 'A'], 'same (threshold 0)' => [[0 => 0], 'A', 'A', 0], 'empty' => [[], '', ''], 'single line diff' => [[], 'A', 'B'], 'below threshold I' => [[], "A\nX\nC", "A\nB\nC"], 'below threshold II' => [[], "A\n\n\n\nX\nC", "A\n\n\n\nB\nC"], 'below threshold III' => [[0 => 5], "A\n\n\n\n\n\nB", "A\n\n\n\n\n\nA"], 'same start' => [[0 => 5], "A\n\n\n\n\n\nX\nC", "A\n\n\n\n\n\nB\nC"], 'same start long' => [[0 => 13], "\n\n\n\n\n\n\n\n\n\n\n\n\n\nA", "\n\n\n\n\n\n\n\n\n\n\n\n\n\nB"], 'same part in between' => [[2 => 8], "A\n\n\n\n\n\n\nX\nY\nZ\n\n", "B\n\n\n\n\n\n\nX\nA\nZ\n\n"], 'same trailing' => [[2 => 14], "A\n\n\n\n\n\n\n\n\n\n\n\n\n\n", "B\n\n\n\n\n\n\n\n\n\n\n\n\n\n"], 'same part in between, same trailing' => [[2 => 7, 10 => 15], "A\n\n\n\n\n\n\nA\n\n\n\n\n\n\n", "B\n\n\n\n\n\n\nB\n\n\n\n\n\n\n"], 'below custom threshold I' => [[], "A\n\nB", "A\n\nD", 2], 'custom threshold I' => [[0 => 1], "A\n\nB", "A\n\nD", 1], 'custom threshold II' => [[], "A\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n", "A\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n", 19], [[3 => 9], "a\nb\nc\nd\ne\nf\ng\nh\ni\nj\nk", "a\np\nc\nd\ne\nf\ng\nh\ni\nw\nk"], [[0 => 5, 8 => 13], "A\nA\nA\nA\nA\nA\nX\nC\nC\nC\nC\nC\nC", "A\nA\nA\nA\nA\nA\nB\nC\nC\nC\nC\nC\nC"], [[0 => 5, 8 => 13], "A\nA\nA\nA\nA\nA\nX\nC\nC\nC\nC\nC\nC\nX", "A\nA\nA\nA\nA\nA\nB\nC\nC\nC\nC\nC\nC\nY"]];
    }
}
