<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\PhpParser\Lexer\TokenEmulator;

use _PhpScopere5e7dca8c031\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopere5e7dca8c031\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopere5e7dca8c031\PhpParser\Lexer\Emulative::PHP_8_0;
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
