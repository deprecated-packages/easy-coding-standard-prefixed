<?php

declare (strict_types=1);
namespace _PhpScoper48800f361566\PhpParser\Lexer\TokenEmulator;

use _PhpScoper48800f361566\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper48800f361566\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper48800f361566\PhpParser\Lexer\Emulative::PHP_8_0;
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
