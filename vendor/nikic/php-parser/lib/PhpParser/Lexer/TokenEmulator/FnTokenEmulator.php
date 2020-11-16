<?php

declare (strict_types=1);
namespace _PhpScoper8e2d8a2760d1\PhpParser\Lexer\TokenEmulator;

use _PhpScoper8e2d8a2760d1\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper8e2d8a2760d1\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper8e2d8a2760d1\PhpParser\Lexer\Emulative::PHP_7_4;
    }
    public function getKeywordString() : string
    {
        return 'fn';
    }
    public function getKeywordToken() : int
    {
        return \T_FN;
    }
}
