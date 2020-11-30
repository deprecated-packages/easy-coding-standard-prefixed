<?php

declare (strict_types=1);
namespace _PhpScopera09818bc50da\PhpParser\Lexer\TokenEmulator;

use _PhpScopera09818bc50da\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopera09818bc50da\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera09818bc50da\PhpParser\Lexer\Emulative::PHP_7_4;
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
