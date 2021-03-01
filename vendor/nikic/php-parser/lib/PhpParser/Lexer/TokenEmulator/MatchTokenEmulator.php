<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f\PhpParser\Lexer\TokenEmulator;

use _PhpScoperc4ea0f0bd23f\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperc4ea0f0bd23f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperc4ea0f0bd23f\PhpParser\Lexer\Emulative::PHP_8_0;
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
