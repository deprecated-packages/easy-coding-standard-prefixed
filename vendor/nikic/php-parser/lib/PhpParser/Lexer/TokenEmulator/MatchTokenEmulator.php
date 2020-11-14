<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\PhpParser\Lexer\TokenEmulator;

use _PhpScoperddde3ba4aebc\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperddde3ba4aebc\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperddde3ba4aebc\PhpParser\Lexer\Emulative::PHP_8_0;
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
