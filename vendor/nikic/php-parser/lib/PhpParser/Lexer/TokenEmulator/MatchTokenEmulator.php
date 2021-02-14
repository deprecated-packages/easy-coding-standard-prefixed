<?php

declare (strict_types=1);
namespace _PhpScoperf361a7d70552\PhpParser\Lexer\TokenEmulator;

use _PhpScoperf361a7d70552\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperf361a7d70552\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperf361a7d70552\PhpParser\Lexer\Emulative::PHP_8_0;
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
