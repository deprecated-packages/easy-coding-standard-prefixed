<?php

declare (strict_types=1);
namespace _PhpScoperaad82bb90a86\PhpParser\Lexer\TokenEmulator;

use _PhpScoperaad82bb90a86\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperaad82bb90a86\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperaad82bb90a86\PhpParser\Lexer\Emulative::PHP_8_0;
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
