<?php

declare (strict_types=1);
namespace _PhpScoper81b3ff5ab9fe\PhpParser\Lexer\TokenEmulator;

use _PhpScoper81b3ff5ab9fe\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper81b3ff5ab9fe\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper81b3ff5ab9fe\PhpParser\Lexer\Emulative::PHP_8_0;
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
