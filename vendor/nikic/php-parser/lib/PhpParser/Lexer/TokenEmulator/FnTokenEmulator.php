<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\PhpParser\Lexer\TokenEmulator;

use _PhpScopercda2b863d098\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopercda2b863d098\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopercda2b863d098\PhpParser\Lexer\Emulative::PHP_7_4;
    }
    public function getKeywordString() : string
    {
        return 'fn';
    }
    public function getKeywordToken() : int
    {
        return \T_FN;
    }
}
