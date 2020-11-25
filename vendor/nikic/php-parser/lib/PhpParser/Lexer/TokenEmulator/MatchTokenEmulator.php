<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c\PhpParser\Lexer\TokenEmulator;

use _PhpScoperd301db66c80c\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperd301db66c80c\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperd301db66c80c\PhpParser\Lexer\Emulative::PHP_8_0;
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
