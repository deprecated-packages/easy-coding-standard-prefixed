<?php

declare (strict_types=1);
namespace _PhpScopera6f918786d5c\PhpParser\Lexer\TokenEmulator;

use _PhpScopera6f918786d5c\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopera6f918786d5c\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera6f918786d5c\PhpParser\Lexer\Emulative::PHP_7_4;
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
