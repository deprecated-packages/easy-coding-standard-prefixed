<?php

declare (strict_types=1);
namespace _PhpScoperd8b12759ee0d\PhpParser\Lexer\TokenEmulator;

use _PhpScoperd8b12759ee0d\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperd8b12759ee0d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperd8b12759ee0d\PhpParser\Lexer\Emulative::PHP_7_4;
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
