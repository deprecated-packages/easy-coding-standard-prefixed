<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\PhpParser\Lexer\TokenEmulator;

use _PhpScoper70072c07b02b\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper70072c07b02b\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper70072c07b02b\PhpParser\Lexer\Emulative::PHP_8_0;
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
