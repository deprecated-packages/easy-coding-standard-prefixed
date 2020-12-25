<?php

declare (strict_types=1);
namespace _PhpScoper745103eaabcd\PhpParser\Lexer\TokenEmulator;

use _PhpScoper745103eaabcd\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper745103eaabcd\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper745103eaabcd\PhpParser\Lexer\Emulative::PHP_8_0;
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
