<?php

declare (strict_types=1);
namespace _PhpScoper64ca614e27fd\PhpParser\Lexer\TokenEmulator;

use _PhpScoper64ca614e27fd\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper64ca614e27fd\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper64ca614e27fd\PhpParser\Lexer\Emulative::PHP_8_0;
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
