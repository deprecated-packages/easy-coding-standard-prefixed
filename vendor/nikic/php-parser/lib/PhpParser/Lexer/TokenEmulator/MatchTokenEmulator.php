<?php

declare (strict_types=1);
namespace _PhpScoperfcee700af3df\PhpParser\Lexer\TokenEmulator;

use _PhpScoperfcee700af3df\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperfcee700af3df\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperfcee700af3df\PhpParser\Lexer\Emulative::PHP_8_0;
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
