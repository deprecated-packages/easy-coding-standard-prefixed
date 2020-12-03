<?php

declare (strict_types=1);
namespace _PhpScoper5465fda93cc7\PhpParser\Lexer\TokenEmulator;

use _PhpScoper5465fda93cc7\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper5465fda93cc7\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper5465fda93cc7\PhpParser\Lexer\Emulative::PHP_7_4;
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
