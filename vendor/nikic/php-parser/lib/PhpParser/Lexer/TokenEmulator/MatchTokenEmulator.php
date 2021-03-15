<?php

declare (strict_types=1);
namespace _PhpScoper8a7636b3fdaf\PhpParser\Lexer\TokenEmulator;

use _PhpScoper8a7636b3fdaf\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper8a7636b3fdaf\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper8a7636b3fdaf\PhpParser\Lexer\Emulative::PHP_8_0;
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
