<?php

declare (strict_types=1);
namespace _PhpScoper31ba553edf97\PhpParser\Lexer\TokenEmulator;

use _PhpScoper31ba553edf97\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper31ba553edf97\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper31ba553edf97\PhpParser\Lexer\Emulative::PHP_8_0;
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
