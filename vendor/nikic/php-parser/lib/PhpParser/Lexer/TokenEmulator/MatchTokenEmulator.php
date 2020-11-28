<?php

declare (strict_types=1);
namespace _PhpScoperc8b83ee8976a\PhpParser\Lexer\TokenEmulator;

use _PhpScoperc8b83ee8976a\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperc8b83ee8976a\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperc8b83ee8976a\PhpParser\Lexer\Emulative::PHP_8_0;
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
