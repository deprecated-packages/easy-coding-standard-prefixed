<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\PhpParser\Lexer\TokenEmulator;

use _PhpScoperad4b7e2c09d8\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperad4b7e2c09d8\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperad4b7e2c09d8\PhpParser\Lexer\Emulative::PHP_8_0;
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
