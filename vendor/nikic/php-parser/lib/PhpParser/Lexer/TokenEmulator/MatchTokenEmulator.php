<?php

declare (strict_types=1);
namespace _PhpScopere4fa57261c04\PhpParser\Lexer\TokenEmulator;

use _PhpScopere4fa57261c04\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopere4fa57261c04\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopere4fa57261c04\PhpParser\Lexer\Emulative::PHP_8_0;
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
