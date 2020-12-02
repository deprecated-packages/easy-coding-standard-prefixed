<?php

declare (strict_types=1);
namespace _PhpScopera23ebff5477f\PhpParser\Lexer\TokenEmulator;

use _PhpScopera23ebff5477f\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopera23ebff5477f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera23ebff5477f\PhpParser\Lexer\Emulative::PHP_7_4;
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
