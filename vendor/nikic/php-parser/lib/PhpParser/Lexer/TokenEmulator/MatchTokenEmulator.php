<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\PhpParser\Lexer\TokenEmulator;

use _PhpScoper279cf54b77ad\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper279cf54b77ad\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper279cf54b77ad\PhpParser\Lexer\Emulative::PHP_8_0;
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
