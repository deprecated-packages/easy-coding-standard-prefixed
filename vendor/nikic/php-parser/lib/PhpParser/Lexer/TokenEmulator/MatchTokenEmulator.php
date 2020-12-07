<?php

declare (strict_types=1);
namespace _PhpScoper89ec3c69e67d\PhpParser\Lexer\TokenEmulator;

use _PhpScoper89ec3c69e67d\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper89ec3c69e67d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper89ec3c69e67d\PhpParser\Lexer\Emulative::PHP_8_0;
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
