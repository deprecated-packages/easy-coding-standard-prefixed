<?php

declare (strict_types=1);
namespace _PhpScoperfcce67077a55\PhpParser\Lexer\TokenEmulator;

use _PhpScoperfcce67077a55\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperfcce67077a55\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperfcce67077a55\PhpParser\Lexer\Emulative::PHP_8_0;
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
