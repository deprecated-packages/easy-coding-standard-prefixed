<?php

declare (strict_types=1);
namespace _PhpScopera88a8b9f064a\PhpParser\Lexer\TokenEmulator;

use _PhpScopera88a8b9f064a\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopera88a8b9f064a\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera88a8b9f064a\PhpParser\Lexer\Emulative::PHP_7_4;
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
