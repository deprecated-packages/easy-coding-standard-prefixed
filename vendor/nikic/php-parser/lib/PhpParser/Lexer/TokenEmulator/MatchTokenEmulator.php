<?php

declare (strict_types=1);
namespace _PhpScoperbc5235eb86f3\PhpParser\Lexer\TokenEmulator;

use _PhpScoperbc5235eb86f3\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperbc5235eb86f3\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperbc5235eb86f3\PhpParser\Lexer\Emulative::PHP_8_0;
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
