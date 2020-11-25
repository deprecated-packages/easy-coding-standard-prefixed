<?php

declare (strict_types=1);
namespace _PhpScoper2f75f00bf6fa\PhpParser\Lexer\TokenEmulator;

use _PhpScoper2f75f00bf6fa\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper2f75f00bf6fa\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper2f75f00bf6fa\PhpParser\Lexer\Emulative::PHP_8_0;
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
