<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c\PhpParser\Lexer\TokenEmulator;

use _PhpScoperd301db66c80c\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperd301db66c80c\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperd301db66c80c\PhpParser\Lexer\Emulative::PHP_7_4;
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
