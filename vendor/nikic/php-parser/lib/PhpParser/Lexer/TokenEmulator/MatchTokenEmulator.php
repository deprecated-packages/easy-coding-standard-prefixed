<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PhpParser\Lexer\TokenEmulator;

use _PhpScoperc64a4ac1af35\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperc64a4ac1af35\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperc64a4ac1af35\PhpParser\Lexer\Emulative::PHP_8_0;
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
