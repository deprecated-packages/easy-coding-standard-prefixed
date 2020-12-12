<?php

declare (strict_types=1);
namespace _PhpScoper326bba7310a2\PhpParser\Lexer\TokenEmulator;

use _PhpScoper326bba7310a2\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper326bba7310a2\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper326bba7310a2\PhpParser\Lexer\Emulative::PHP_8_0;
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
