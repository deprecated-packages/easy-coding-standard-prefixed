<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\PhpParser\Lexer\TokenEmulator;

use _PhpScopercda2b863d098\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopercda2b863d098\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopercda2b863d098\PhpParser\Lexer\Emulative::PHP_8_0;
    }
    public function getKeywordString() : string
    {
        return 'match';
    }
    public function getKeywordToken() : int
    {
        return \T_MATCH;
    }
}
