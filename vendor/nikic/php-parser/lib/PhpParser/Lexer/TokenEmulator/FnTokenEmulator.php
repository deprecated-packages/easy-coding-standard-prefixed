<?php

declare (strict_types=1);
namespace _PhpScopera04bf8e97c06\PhpParser\Lexer\TokenEmulator;

use _PhpScopera04bf8e97c06\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopera04bf8e97c06\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera04bf8e97c06\PhpParser\Lexer\Emulative::PHP_7_4;
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
