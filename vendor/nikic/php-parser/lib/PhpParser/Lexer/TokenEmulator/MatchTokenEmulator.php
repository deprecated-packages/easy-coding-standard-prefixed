<?php

declare (strict_types=1);
namespace _PhpScoper3e8786a75afe\PhpParser\Lexer\TokenEmulator;

use _PhpScoper3e8786a75afe\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper3e8786a75afe\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper3e8786a75afe\PhpParser\Lexer\Emulative::PHP_8_0;
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
