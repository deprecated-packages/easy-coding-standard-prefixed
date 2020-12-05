<?php

declare (strict_types=1);
namespace _PhpScoper02b5d1bf8fec\PhpParser\Lexer\TokenEmulator;

use _PhpScoper02b5d1bf8fec\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper02b5d1bf8fec\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper02b5d1bf8fec\PhpParser\Lexer\Emulative::PHP_8_0;
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
