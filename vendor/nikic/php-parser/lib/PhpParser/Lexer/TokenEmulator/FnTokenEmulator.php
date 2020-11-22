<?php

declare (strict_types=1);
namespace _PhpScoper3fa05b4669af\PhpParser\Lexer\TokenEmulator;

use _PhpScoper3fa05b4669af\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper3fa05b4669af\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper3fa05b4669af\PhpParser\Lexer\Emulative::PHP_7_4;
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
