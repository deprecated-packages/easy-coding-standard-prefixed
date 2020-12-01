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
namespace _PhpScoperad68e34a80c5\SebastianBergmann\Diff\Output;

final class StrictUnifiedDiffOutputBuilderDataProvider
{
    public static function provideOutputBuildingCases() : array
    {
        return [['--- input.txt
+++ output.txt
@@ -1,3 +1,4 @@
+b
 ' . '
 ' . '
 ' . '
@@ -16,5 +17,4 @@
 ' . '
 ' . '
 ' . '
-
-B
+A
', "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\nB\n", "b\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\nA\n", ['fromFile' => 'input.txt', 'toFile' => 'output.txt']], ['--- ' . __FILE__ . "\t2017-10-02 17:38:11.586413675 +0100\n+++ output1.txt\t2017-10-03 12:09:43.086719482 +0100\n@@ -1,1 +1,1 @@\n-B\n+X\n", "B\n", "X\n", ['fromFile' => __FILE__, 'fromFileDate' => '2017-10-02 17:38:11.586413675 +0100', 'toFile' => 'output1.txt', 'toFileDate' => '2017-10-03 12:09:43.086719482 +0100', 'collapseRanges' => \false]], ['--- input.txt
+++ output.txt
@@ -1 +1 @@
-B
+X
', "B\n", "X\n", ['fromFile' => 'input.txt', 'toFile' => 'output.txt', 'collapseRanges' => \true]]];
    }
    public static function provideSample() : array
    {
        return [['--- input.txt
+++ output.txt
@@ -1,6 +1,6 @@
 1
 2
 3
-4
+X
 5
 6
', "1\n2\n3\n4\n5\n6\n", "1\n2\n3\nX\n5\n6\n", ['fromFile' => 'input.txt', 'toFile' => 'output.txt']]];
    }
    public static function provideBasicDiffGeneration() : array
    {
        return [["--- input.txt\n+++ output.txt\n@@ -1,2 +1 @@\n-A\n-B\n+A\rB\n", "A\nB\n", "A\rB\n"], ["--- input.txt\n+++ output.txt\n@@ -1 +1 @@\n-\n+\r\n\\ No newline at end of file\n", "\n", "\r"], ["--- input.txt\n+++ output.txt\n@@ -1 +1 @@\n-\r\n\\ No newline at end of file\n+\n", "\r", "\n"], ['--- input.txt
+++ output.txt
@@ -1,3 +1,3 @@
 X
 A
-A
+B
', "X\nA\nA\n", "X\nA\nB\n"], ['--- input.txt
+++ output.txt
@@ -1,3 +1,3 @@
 X
 A
-A
\\ No newline at end of file
+B
', "X\nA\nA", "X\nA\nB\n"], ['--- input.txt
+++ output.txt
@@ -1,3 +1,3 @@
 A
 A
-A
+B
\\ No newline at end of file
', "A\nA\nA\n", "A\nA\nB"], ['--- input.txt
+++ output.txt
@@ -1 +1 @@
-A
\\ No newline at end of file
+B
\\ No newline at end of file
', 'A', 'B']];
    }
}
