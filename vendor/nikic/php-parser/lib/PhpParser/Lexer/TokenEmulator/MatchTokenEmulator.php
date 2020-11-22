<?php

declare (strict_types=1);
namespace _PhpScoper797695bcfb1f\PhpParser\Lexer\TokenEmulator;

use _PhpScoper797695bcfb1f\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper797695bcfb1f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper797695bcfb1f\PhpParser\Lexer\Emulative::PHP_8_0;
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
