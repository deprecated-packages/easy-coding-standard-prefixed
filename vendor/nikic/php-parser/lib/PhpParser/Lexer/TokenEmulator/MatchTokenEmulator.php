<?php

declare (strict_types=1);
namespace _PhpScoperd9fcac9e904f\PhpParser\Lexer\TokenEmulator;

use _PhpScoperd9fcac9e904f\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperd9fcac9e904f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperd9fcac9e904f\PhpParser\Lexer\Emulative::PHP_8_0;
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
