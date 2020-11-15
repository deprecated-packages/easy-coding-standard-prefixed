<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\PhpParser\Lexer\TokenEmulator;

use _PhpScoperd9c3b46af121\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperd9c3b46af121\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperd9c3b46af121\PhpParser\Lexer\Emulative::PHP_8_0;
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
