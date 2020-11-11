<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\PhpParser\Lexer\TokenEmulator;

use _PhpScoper0f5cd390c37a\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper0f5cd390c37a\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper0f5cd390c37a\PhpParser\Lexer\Emulative::PHP_8_0;
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
