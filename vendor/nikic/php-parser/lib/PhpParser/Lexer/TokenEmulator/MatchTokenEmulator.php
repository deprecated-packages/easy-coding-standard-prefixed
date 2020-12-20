<?php

declare (strict_types=1);
namespace _PhpScoperab9510cd5d97\PhpParser\Lexer\TokenEmulator;

use _PhpScoperab9510cd5d97\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperab9510cd5d97\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperab9510cd5d97\PhpParser\Lexer\Emulative::PHP_8_0;
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
