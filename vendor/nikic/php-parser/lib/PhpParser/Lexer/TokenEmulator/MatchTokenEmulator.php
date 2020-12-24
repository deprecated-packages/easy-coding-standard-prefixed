<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab\PhpParser\Lexer\TokenEmulator;

use _PhpScopera37d6fb0b1ab\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopera37d6fb0b1ab\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera37d6fb0b1ab\PhpParser\Lexer\Emulative::PHP_8_0;
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
