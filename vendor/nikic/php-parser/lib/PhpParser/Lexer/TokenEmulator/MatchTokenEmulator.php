<?php

declare (strict_types=1);
namespace _PhpScoper8acb416c2f5a\PhpParser\Lexer\TokenEmulator;

use _PhpScoper8acb416c2f5a\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper8acb416c2f5a\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper8acb416c2f5a\PhpParser\Lexer\Emulative::PHP_8_0;
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
