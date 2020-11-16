<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\PhpParser\Lexer\TokenEmulator;

use _PhpScoper3e1e0e5bb8ef\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper3e1e0e5bb8ef\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper3e1e0e5bb8ef\PhpParser\Lexer\Emulative::PHP_8_0;
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
