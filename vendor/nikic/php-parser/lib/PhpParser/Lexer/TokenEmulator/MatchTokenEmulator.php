<?php

declare (strict_types=1);
namespace _PhpScoperd8b12759ee0d\PhpParser\Lexer\TokenEmulator;

use _PhpScoperd8b12759ee0d\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperd8b12759ee0d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperd8b12759ee0d\PhpParser\Lexer\Emulative::PHP_8_0;
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
