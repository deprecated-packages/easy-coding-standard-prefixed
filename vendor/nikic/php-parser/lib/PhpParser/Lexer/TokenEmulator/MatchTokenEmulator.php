<?php

declare (strict_types=1);
namespace _PhpScoper629192f0909b\PhpParser\Lexer\TokenEmulator;

use _PhpScoper629192f0909b\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper629192f0909b\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper629192f0909b\PhpParser\Lexer\Emulative::PHP_8_0;
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
