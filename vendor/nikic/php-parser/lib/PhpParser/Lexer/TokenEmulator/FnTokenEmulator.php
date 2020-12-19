<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c\PhpParser\Lexer\TokenEmulator;

use _PhpScopera8f555a7493c\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopera8f555a7493c\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera8f555a7493c\PhpParser\Lexer\Emulative::PHP_7_4;
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
