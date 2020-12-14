<?php

declare (strict_types=1);
namespace _PhpScoper6224e3b16fcc\PhpParser\Lexer\TokenEmulator;

use _PhpScoper6224e3b16fcc\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper6224e3b16fcc\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper6224e3b16fcc\PhpParser\Lexer\Emulative::PHP_8_0;
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
