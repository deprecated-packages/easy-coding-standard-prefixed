<?php

declare (strict_types=1);
namespace _PhpScopera40fc53e636b\PhpParser\Lexer\TokenEmulator;

use _PhpScopera40fc53e636b\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopera40fc53e636b\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera40fc53e636b\PhpParser\Lexer\Emulative::PHP_8_0;
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
