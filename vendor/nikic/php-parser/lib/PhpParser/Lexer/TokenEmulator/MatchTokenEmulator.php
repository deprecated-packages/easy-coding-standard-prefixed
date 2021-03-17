<?php

declare (strict_types=1);
namespace _PhpScoper246d3630afdd\PhpParser\Lexer\TokenEmulator;

use _PhpScoper246d3630afdd\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper246d3630afdd\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper246d3630afdd\PhpParser\Lexer\Emulative::PHP_8_0;
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
