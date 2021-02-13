<?php

declare (strict_types=1);
namespace _PhpScoper3f3a54dd086f\PhpParser\Lexer\TokenEmulator;

use _PhpScoper3f3a54dd086f\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper3f3a54dd086f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper3f3a54dd086f\PhpParser\Lexer\Emulative::PHP_8_0;
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
