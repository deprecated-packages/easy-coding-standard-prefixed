<?php

declare (strict_types=1);
namespace _PhpScoperea337ed74749\PhpParser\Lexer\TokenEmulator;

use _PhpScoperea337ed74749\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperea337ed74749\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperea337ed74749\PhpParser\Lexer\Emulative::PHP_8_0;
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
