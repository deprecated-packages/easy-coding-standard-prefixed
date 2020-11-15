<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\PhpParser\Lexer\TokenEmulator;

use _PhpScopercb576ca159b5\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopercb576ca159b5\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopercb576ca159b5\PhpParser\Lexer\Emulative::PHP_8_0;
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
