<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\PhpParser\Lexer\TokenEmulator;

use _PhpScoperbcc0395698f8\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperbcc0395698f8\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperbcc0395698f8\PhpParser\Lexer\Emulative::PHP_7_4;
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
