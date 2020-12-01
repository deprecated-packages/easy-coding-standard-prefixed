<?php

declare (strict_types=1);
namespace _PhpScoper9613f3fac51d\PhpParser\Lexer\TokenEmulator;

use _PhpScoper9613f3fac51d\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper9613f3fac51d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper9613f3fac51d\PhpParser\Lexer\Emulative::PHP_8_0;
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
