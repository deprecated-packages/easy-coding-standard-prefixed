<?php

declare (strict_types=1);
namespace _PhpScoperbd5c5a045153\PhpParser\Lexer\TokenEmulator;

use _PhpScoperbd5c5a045153\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperbd5c5a045153\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperbd5c5a045153\PhpParser\Lexer\Emulative::PHP_8_0;
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
