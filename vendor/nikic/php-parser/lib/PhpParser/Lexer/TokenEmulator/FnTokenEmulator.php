<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\PhpParser\Lexer\TokenEmulator;

use _PhpScoperfacc742d2745\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperfacc742d2745\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperfacc742d2745\PhpParser\Lexer\Emulative::PHP_7_4;
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
