<?php

declare (strict_types=1);
namespace _PhpScopere050faf861e6\PhpParser\Lexer\TokenEmulator;

use _PhpScopere050faf861e6\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopere050faf861e6\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopere050faf861e6\PhpParser\Lexer\Emulative::PHP_8_0;
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
