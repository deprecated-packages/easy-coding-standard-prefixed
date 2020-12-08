<?php

declare (strict_types=1);
namespace _PhpScoperf053e888b664\PhpParser\Lexer\TokenEmulator;

use _PhpScoperf053e888b664\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperf053e888b664\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperf053e888b664\PhpParser\Lexer\Emulative::PHP_8_0;
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
