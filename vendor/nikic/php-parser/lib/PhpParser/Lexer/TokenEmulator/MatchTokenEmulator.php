<?php

declare (strict_types=1);
namespace _PhpScoperc7c7dddc9238\PhpParser\Lexer\TokenEmulator;

use _PhpScoperc7c7dddc9238\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperc7c7dddc9238\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperc7c7dddc9238\PhpParser\Lexer\Emulative::PHP_8_0;
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
