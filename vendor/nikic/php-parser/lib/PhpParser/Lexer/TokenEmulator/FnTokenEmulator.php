<?php

declare (strict_types=1);
namespace _PhpScoper47644ab3aa9a\PhpParser\Lexer\TokenEmulator;

use _PhpScoper47644ab3aa9a\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper47644ab3aa9a\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper47644ab3aa9a\PhpParser\Lexer\Emulative::PHP_7_4;
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
