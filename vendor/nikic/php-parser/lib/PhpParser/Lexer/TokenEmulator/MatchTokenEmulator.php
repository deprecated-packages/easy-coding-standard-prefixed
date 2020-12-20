<?php

declare (strict_types=1);
namespace _PhpScopere205696a9dd6\PhpParser\Lexer\TokenEmulator;

use _PhpScopere205696a9dd6\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopere205696a9dd6\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopere205696a9dd6\PhpParser\Lexer\Emulative::PHP_8_0;
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
