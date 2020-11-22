<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\PhpParser\Lexer\TokenEmulator;

use _PhpScoperfacc742d2745\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperfacc742d2745\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperfacc742d2745\PhpParser\Lexer\Emulative::PHP_8_0;
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
