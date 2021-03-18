<?php

declare (strict_types=1);
namespace _PhpScoper0ba97041430d\PhpParser\Lexer\TokenEmulator;

use _PhpScoper0ba97041430d\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper0ba97041430d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper0ba97041430d\PhpParser\Lexer\Emulative::PHP_8_0;
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
