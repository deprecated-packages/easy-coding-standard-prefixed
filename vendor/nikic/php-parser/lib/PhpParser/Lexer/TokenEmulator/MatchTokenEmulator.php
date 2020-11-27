<?php

declare (strict_types=1);
namespace _PhpScoper578a67c80b2b\PhpParser\Lexer\TokenEmulator;

use _PhpScoper578a67c80b2b\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper578a67c80b2b\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper578a67c80b2b\PhpParser\Lexer\Emulative::PHP_8_0;
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
