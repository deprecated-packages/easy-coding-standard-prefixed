<?php

declare (strict_types=1);
namespace _PhpScoperfa7254c25e18\PhpParser\Lexer\TokenEmulator;

use _PhpScoperfa7254c25e18\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperfa7254c25e18\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperfa7254c25e18\PhpParser\Lexer\Emulative::PHP_8_0;
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
