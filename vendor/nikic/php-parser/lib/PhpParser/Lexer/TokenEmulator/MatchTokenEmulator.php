<?php

declare (strict_types=1);
namespace _PhpScoper9d73a84b09ad\PhpParser\Lexer\TokenEmulator;

use _PhpScoper9d73a84b09ad\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper9d73a84b09ad\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper9d73a84b09ad\PhpParser\Lexer\Emulative::PHP_8_0;
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
