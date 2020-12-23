<?php

declare (strict_types=1);
namespace _PhpScoperd9fcac9e904f\PhpParser\Lexer\TokenEmulator;

use _PhpScoperd9fcac9e904f\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperd9fcac9e904f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperd9fcac9e904f\PhpParser\Lexer\Emulative::PHP_7_4;
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
