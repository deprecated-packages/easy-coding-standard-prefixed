<?php

declare (strict_types=1);
namespace _PhpScoper66292c14b658\PhpParser\Lexer\TokenEmulator;

use _PhpScoper66292c14b658\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper66292c14b658\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper66292c14b658\PhpParser\Lexer\Emulative::PHP_8_0;
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
