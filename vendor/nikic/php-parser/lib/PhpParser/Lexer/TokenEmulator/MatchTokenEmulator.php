<?php

declare (strict_types=1);
namespace _PhpScoper28ab463fc3ba\PhpParser\Lexer\TokenEmulator;

use _PhpScoper28ab463fc3ba\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper28ab463fc3ba\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper28ab463fc3ba\PhpParser\Lexer\Emulative::PHP_8_0;
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
