<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\PhpParser\Lexer\TokenEmulator;

use _PhpScoper49c742f5a4ee\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper49c742f5a4ee\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper49c742f5a4ee\PhpParser\Lexer\Emulative::PHP_8_0;
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
