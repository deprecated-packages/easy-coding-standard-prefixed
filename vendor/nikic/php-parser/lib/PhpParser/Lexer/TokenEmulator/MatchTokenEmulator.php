<?php

declare (strict_types=1);
namespace _PhpScoper21c6ce8bfe5d\PhpParser\Lexer\TokenEmulator;

use _PhpScoper21c6ce8bfe5d\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper21c6ce8bfe5d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper21c6ce8bfe5d\PhpParser\Lexer\Emulative::PHP_8_0;
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
