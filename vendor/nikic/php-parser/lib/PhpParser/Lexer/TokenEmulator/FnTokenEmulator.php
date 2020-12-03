<?php

declare (strict_types=1);
namespace _PhpScoper6c2f17c43d2d\PhpParser\Lexer\TokenEmulator;

use _PhpScoper6c2f17c43d2d\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper6c2f17c43d2d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper6c2f17c43d2d\PhpParser\Lexer\Emulative::PHP_7_4;
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
