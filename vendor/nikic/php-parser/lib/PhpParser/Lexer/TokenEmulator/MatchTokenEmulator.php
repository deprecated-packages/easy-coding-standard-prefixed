<?php

declare (strict_types=1);
namespace _PhpScoper08748c77fa1c\PhpParser\Lexer\TokenEmulator;

use _PhpScoper08748c77fa1c\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper08748c77fa1c\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper08748c77fa1c\PhpParser\Lexer\Emulative::PHP_8_0;
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
