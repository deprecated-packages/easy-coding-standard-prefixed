<?php

declare (strict_types=1);
namespace _PhpScoper2a8ad010dfbd\PhpParser\Lexer\TokenEmulator;

use _PhpScoper2a8ad010dfbd\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper2a8ad010dfbd\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper2a8ad010dfbd\PhpParser\Lexer\Emulative::PHP_8_0;
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
