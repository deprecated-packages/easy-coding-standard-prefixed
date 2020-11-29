<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercae980ebf12d\Symfony\Component\Process\Tests;

use _PhpScopercae980ebf12d\PHPUnit\Framework\TestCase;
use _PhpScopercae980ebf12d\Symfony\Component\Process\ProcessUtils;
/**
 * @group legacy
 */
class ProcessUtilsTest extends \_PhpScopercae980ebf12d\PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider dataArguments
     */
    public function testEscapeArgument($result, $argument)
    {
        $this->assertSame($result, \_PhpScopercae980ebf12d\Symfony\Component\Process\ProcessUtils::escapeArgument($argument));
    }
    public function dataArguments()
    {
        if ('\\' === \DIRECTORY_SEPARATOR) {
            return array(array('"\\"php\\" \\"-v\\""', '"php" "-v"'), array('"foo bar"', 'foo bar'), array('^%"path"^%', '%path%'), array('"<|>\\" \\"\'f"', '<|>" "\'f'), array('""', ''), array('"with\\trailingbs\\\\"', 'with\\trailingbs\\'));
        }
        return array(array("'\"php\" \"-v\"'", '"php" "-v"'), array("'foo bar'", 'foo bar'), array("'%path%'", '%path%'), array("'<|>\" \"'\\''f'", '<|>" "\'f'), array("''", ''), array("'with\\trailingbs\\'", 'with\\trailingbs\\'), array("'withNonAsciiAccentLikeéÉèÈàÀöä'", 'withNonAsciiAccentLikeéÉèÈàÀöä'));
    }
}
