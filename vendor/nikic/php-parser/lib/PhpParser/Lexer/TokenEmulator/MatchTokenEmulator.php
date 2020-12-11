<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d\PhpParser\Lexer\TokenEmulator;

use _PhpScoperb26833cc184d\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperb26833cc184d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperb26833cc184d\PhpParser\Lexer\Emulative::PHP_8_0;
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
