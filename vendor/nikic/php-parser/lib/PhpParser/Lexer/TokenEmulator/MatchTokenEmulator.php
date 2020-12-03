<?php

declare (strict_types=1);
namespace _PhpScoper5c006f5f032f\PhpParser\Lexer\TokenEmulator;

use _PhpScoper5c006f5f032f\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper5c006f5f032f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper5c006f5f032f\PhpParser\Lexer\Emulative::PHP_8_0;
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
