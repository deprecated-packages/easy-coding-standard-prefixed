<?php

declare (strict_types=1);
namespace _PhpScoperd1a5bf00e83e\PhpParser\Lexer\TokenEmulator;

use _PhpScoperd1a5bf00e83e\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperd1a5bf00e83e\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperd1a5bf00e83e\PhpParser\Lexer\Emulative::PHP_8_0;
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
