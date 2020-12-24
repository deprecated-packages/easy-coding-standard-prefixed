<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab\PhpParser\Lexer\TokenEmulator;

use _PhpScopera37d6fb0b1ab\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopera37d6fb0b1ab\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera37d6fb0b1ab\PhpParser\Lexer\Emulative::PHP_7_4;
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
