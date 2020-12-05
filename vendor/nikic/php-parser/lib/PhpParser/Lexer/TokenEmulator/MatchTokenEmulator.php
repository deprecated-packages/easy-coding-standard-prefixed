<?php

declare (strict_types=1);
namespace _PhpScoperbaf90856897c\PhpParser\Lexer\TokenEmulator;

use _PhpScoperbaf90856897c\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperbaf90856897c\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperbaf90856897c\PhpParser\Lexer\Emulative::PHP_8_0;
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
