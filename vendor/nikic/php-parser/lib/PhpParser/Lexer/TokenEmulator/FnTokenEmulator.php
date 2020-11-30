<?php

declare (strict_types=1);
namespace _PhpScoper246d7c16d32f\PhpParser\Lexer\TokenEmulator;

use _PhpScoper246d7c16d32f\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper246d7c16d32f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper246d7c16d32f\PhpParser\Lexer\Emulative::PHP_7_4;
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
