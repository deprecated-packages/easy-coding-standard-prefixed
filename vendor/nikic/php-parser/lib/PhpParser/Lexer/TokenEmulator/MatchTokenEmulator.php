<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\PhpParser\Lexer\TokenEmulator;

use _PhpScopera749ac204cd2\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopera749ac204cd2\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera749ac204cd2\PhpParser\Lexer\Emulative::PHP_8_0;
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
