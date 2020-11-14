<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\PhpParser\Lexer\TokenEmulator;

use _PhpScoperb09c3ec8e01a\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperb09c3ec8e01a\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperb09c3ec8e01a\PhpParser\Lexer\Emulative::PHP_8_0;
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
