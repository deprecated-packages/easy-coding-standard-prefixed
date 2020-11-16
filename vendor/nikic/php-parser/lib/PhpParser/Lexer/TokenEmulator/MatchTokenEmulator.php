<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\PhpParser\Lexer\TokenEmulator;

use _PhpScoperdf6a0b341030\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperdf6a0b341030\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperdf6a0b341030\PhpParser\Lexer\Emulative::PHP_8_0;
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
