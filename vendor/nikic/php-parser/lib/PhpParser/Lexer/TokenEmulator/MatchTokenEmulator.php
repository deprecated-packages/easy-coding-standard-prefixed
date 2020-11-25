<?php

declare (strict_types=1);
namespace _PhpScoperaa402dd1b1f1\PhpParser\Lexer\TokenEmulator;

use _PhpScoperaa402dd1b1f1\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperaa402dd1b1f1\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperaa402dd1b1f1\PhpParser\Lexer\Emulative::PHP_8_0;
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
