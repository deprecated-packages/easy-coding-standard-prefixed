<?php

declare (strict_types=1);
namespace _PhpScopera09818bc50da\PhpParser\Lexer\TokenEmulator;

use _PhpScopera09818bc50da\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopera09818bc50da\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera09818bc50da\PhpParser\Lexer\Emulative::PHP_8_0;
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
