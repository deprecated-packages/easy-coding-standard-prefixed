<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb\PhpParser\Lexer\TokenEmulator;

use _PhpScoperb73f9e44f4eb\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperb73f9e44f4eb\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperb73f9e44f4eb\PhpParser\Lexer\Emulative::PHP_8_0;
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
