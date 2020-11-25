<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PhpParser\Lexer\TokenEmulator;

use _PhpScoperdc8fbcd7c69d\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperdc8fbcd7c69d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperdc8fbcd7c69d\PhpParser\Lexer\Emulative::PHP_8_0;
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
