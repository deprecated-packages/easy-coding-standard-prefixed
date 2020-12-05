<?php

declare (strict_types=1);
namespace _PhpScoperaba240c3d5f1\PhpParser\Lexer\TokenEmulator;

use _PhpScoperaba240c3d5f1\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperaba240c3d5f1\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperaba240c3d5f1\PhpParser\Lexer\Emulative::PHP_8_0;
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
