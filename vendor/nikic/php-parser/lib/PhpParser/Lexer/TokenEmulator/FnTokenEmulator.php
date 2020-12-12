<?php

declare (strict_types=1);
namespace _PhpScoper8a05d21c15c9\PhpParser\Lexer\TokenEmulator;

use _PhpScoper8a05d21c15c9\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper8a05d21c15c9\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper8a05d21c15c9\PhpParser\Lexer\Emulative::PHP_7_4;
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
