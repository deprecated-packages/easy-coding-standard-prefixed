<?php

declare (strict_types=1);
namespace _PhpScopera061b8a47e36\PhpParser\Lexer\TokenEmulator;

use _PhpScopera061b8a47e36\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopera061b8a47e36\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera061b8a47e36\PhpParser\Lexer\Emulative::PHP_8_0;
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
