<?php

declare (strict_types=1);
namespace _PhpScoperc83f84c90b60\PhpParser\Lexer\TokenEmulator;

use _PhpScoperc83f84c90b60\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperc83f84c90b60\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperc83f84c90b60\PhpParser\Lexer\Emulative::PHP_8_0;
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
