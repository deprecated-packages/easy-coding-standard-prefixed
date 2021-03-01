<?php

declare (strict_types=1);
namespace _PhpScoperf3dc21757def\PhpParser\Lexer\TokenEmulator;

use _PhpScoperf3dc21757def\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperf3dc21757def\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperf3dc21757def\PhpParser\Lexer\Emulative::PHP_8_0;
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
