<?php

declare (strict_types=1);
namespace _PhpScoper80dbed43490f\PhpParser\Lexer\TokenEmulator;

use _PhpScoper80dbed43490f\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper80dbed43490f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper80dbed43490f\PhpParser\Lexer\Emulative::PHP_8_0;
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
