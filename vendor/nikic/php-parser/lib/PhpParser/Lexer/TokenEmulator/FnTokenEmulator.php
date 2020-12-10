<?php

declare (strict_types=1);
namespace _PhpScoperfab1bfb7ec99\PhpParser\Lexer\TokenEmulator;

use _PhpScoperfab1bfb7ec99\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperfab1bfb7ec99\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperfab1bfb7ec99\PhpParser\Lexer\Emulative::PHP_7_4;
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
