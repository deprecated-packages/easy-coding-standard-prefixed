<?php

declare (strict_types=1);
namespace _PhpScopera88a8b9f064a\PhpParser\Lexer\TokenEmulator;

use _PhpScopera88a8b9f064a\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopera88a8b9f064a\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera88a8b9f064a\PhpParser\Lexer\Emulative::PHP_8_0;
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
