<?php

declare (strict_types=1);
namespace _PhpScoperf65af7a6d9a0\PhpParser\Lexer\TokenEmulator;

use _PhpScoperf65af7a6d9a0\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperf65af7a6d9a0\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperf65af7a6d9a0\PhpParser\Lexer\Emulative::PHP_8_0;
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
