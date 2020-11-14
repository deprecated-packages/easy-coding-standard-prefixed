<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercda2b863d098\Symfony\Component\Process\Tests;

use _PhpScopercda2b863d098\PHPUnit\Framework\TestCase;
use _PhpScopercda2b863d098\Symfony\Component\Process\ProcessUtils;
/**
 * @group legacy
 */
class ProcessUtilsTest extends \_PhpScopercda2b863d098\PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider dataArguments
     */
    public function testEscapeArgument($result, $argument)
    {
        $this->assertSame($result, \_PhpScopercda2b863d098\Symfony\Component\Process\ProcessUtils::escapeArgument($argument));
    }
    public function dataArguments()
    {
        if ('\\' === \DIRECTORY_SEPARATOR) {
            return array(array('"\\"php\\" \\"-v\\""', '"php" "-v"'), array('"foo bar"', 'foo bar'), array('^%"path"^%', '%path%'), array('"<|>\\" \\"\'f"', '<|>" "\'f'), array('""', ''), array('"with\\trailingbs\\\\"', 'with\\trailingbs\\'));
        }
        return array(array("'\"php\" \"-v\"'", '"php" "-v"'), array("'foo bar'", 'foo bar'), array("'%path%'", '%path%'), array("'<|>\" \"'\\''f'", '<|>" "\'f'), array("''", ''), array("'with\\trailingbs\\'", 'with\\trailingbs\\'), array("'withNonAsciiAccentLikeéÉèÈàÀöä'", 'withNonAsciiAccentLikeéÉèÈàÀöä'));
    }
}
