<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f\PhpParser\Lexer\TokenEmulator;

use _PhpScoperb458b528613f\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperb458b528613f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperb458b528613f\PhpParser\Lexer\Emulative::PHP_8_0;
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
