<?php

declare (strict_types=1);
namespace _PhpScoper23ef26a4fb01\PhpParser\Lexer\TokenEmulator;

use _PhpScoper23ef26a4fb01\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper23ef26a4fb01\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper23ef26a4fb01\PhpParser\Lexer\Emulative::PHP_7_4;
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
