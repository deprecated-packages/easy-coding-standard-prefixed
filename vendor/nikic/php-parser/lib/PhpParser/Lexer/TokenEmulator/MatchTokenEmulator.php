<?php

declare (strict_types=1);
namespace _PhpScoperb44a315fec16\PhpParser\Lexer\TokenEmulator;

use _PhpScoperb44a315fec16\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperb44a315fec16\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperb44a315fec16\PhpParser\Lexer\Emulative::PHP_8_0;
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
