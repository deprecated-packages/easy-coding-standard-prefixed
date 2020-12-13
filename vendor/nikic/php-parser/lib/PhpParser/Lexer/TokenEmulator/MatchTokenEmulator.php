<?php

declare (strict_types=1);
namespace _PhpScoper78af57a363a0\PhpParser\Lexer\TokenEmulator;

use _PhpScoper78af57a363a0\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper78af57a363a0\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper78af57a363a0\PhpParser\Lexer\Emulative::PHP_8_0;
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
