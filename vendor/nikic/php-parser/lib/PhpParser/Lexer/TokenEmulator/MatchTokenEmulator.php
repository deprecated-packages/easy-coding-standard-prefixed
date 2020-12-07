<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb\PhpParser\Lexer\TokenEmulator;

use _PhpScoperda2604e33acb\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperda2604e33acb\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperda2604e33acb\PhpParser\Lexer\Emulative::PHP_8_0;
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
