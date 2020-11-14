<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\PhpParser\Lexer\TokenEmulator;

use _PhpScoperecb978830f1e\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperecb978830f1e\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperecb978830f1e\PhpParser\Lexer\Emulative::PHP_8_0;
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
