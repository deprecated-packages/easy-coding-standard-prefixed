<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f\PhpParser\Lexer\TokenEmulator;

use _PhpScoperfd70a7e8e84f\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperfd70a7e8e84f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperfd70a7e8e84f\PhpParser\Lexer\Emulative::PHP_8_0;
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
