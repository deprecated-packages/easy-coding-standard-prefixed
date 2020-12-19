<?php

declare (strict_types=1);
namespace _PhpScoper065e4ba46e6d\PhpParser\Lexer\TokenEmulator;

use _PhpScoper065e4ba46e6d\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper065e4ba46e6d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper065e4ba46e6d\PhpParser\Lexer\Emulative::PHP_8_0;
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
