<?php

declare (strict_types=1);
namespace _PhpScoperd74b3ed28382\PhpParser\Lexer\TokenEmulator;

use _PhpScoperd74b3ed28382\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperd74b3ed28382\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperd74b3ed28382\PhpParser\Lexer\Emulative::PHP_8_0;
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
