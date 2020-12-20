<?php

declare (strict_types=1);
namespace _PhpScoper32136251d417\PhpParser\Lexer\TokenEmulator;

use _PhpScoper32136251d417\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper32136251d417\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper32136251d417\PhpParser\Lexer\Emulative::PHP_8_0;
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
