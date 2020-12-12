<?php

declare (strict_types=1);
namespace _PhpScoper04022cd986ec\PhpParser\Lexer\TokenEmulator;

use _PhpScoper04022cd986ec\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper04022cd986ec\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper04022cd986ec\PhpParser\Lexer\Emulative::PHP_8_0;
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
