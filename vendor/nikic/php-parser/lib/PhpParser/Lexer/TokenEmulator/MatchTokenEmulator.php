<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\PhpParser\Lexer\TokenEmulator;

use _PhpScopera189153e1f79\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopera189153e1f79\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera189153e1f79\PhpParser\Lexer\Emulative::PHP_8_0;
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
