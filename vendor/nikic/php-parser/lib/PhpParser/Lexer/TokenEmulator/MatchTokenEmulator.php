<?php

declare (strict_types=1);
namespace _PhpScoper971ef29294dd\PhpParser\Lexer\TokenEmulator;

use _PhpScoper971ef29294dd\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper971ef29294dd\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper971ef29294dd\PhpParser\Lexer\Emulative::PHP_8_0;
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
