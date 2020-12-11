<?php

declare (strict_types=1);
namespace _PhpScopera061b8a47e36\PhpParser\Lexer\TokenEmulator;

use _PhpScopera061b8a47e36\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopera061b8a47e36\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera061b8a47e36\PhpParser\Lexer\Emulative::PHP_7_4;
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
