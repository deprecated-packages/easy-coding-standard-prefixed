<?php

declare (strict_types=1);
namespace _PhpScopera34ae19e8d40\PhpParser\Lexer\TokenEmulator;

use _PhpScopera34ae19e8d40\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopera34ae19e8d40\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera34ae19e8d40\PhpParser\Lexer\Emulative::PHP_8_0;
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
