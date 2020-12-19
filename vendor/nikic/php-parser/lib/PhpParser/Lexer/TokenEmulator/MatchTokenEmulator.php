<?php

declare (strict_types=1);
namespace _PhpScopera6f918786d5c\PhpParser\Lexer\TokenEmulator;

use _PhpScopera6f918786d5c\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopera6f918786d5c\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera6f918786d5c\PhpParser\Lexer\Emulative::PHP_8_0;
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
