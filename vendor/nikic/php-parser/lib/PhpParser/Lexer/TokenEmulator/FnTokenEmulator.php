<?php

declare (strict_types=1);
namespace _PhpScoperea337ed74749\PhpParser\Lexer\TokenEmulator;

use _PhpScoperea337ed74749\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperea337ed74749\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperea337ed74749\PhpParser\Lexer\Emulative::PHP_7_4;
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
