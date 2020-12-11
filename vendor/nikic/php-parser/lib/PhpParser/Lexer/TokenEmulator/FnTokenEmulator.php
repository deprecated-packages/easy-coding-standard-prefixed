<?php

declare (strict_types=1);
namespace _PhpScopere4fa57261c04\PhpParser\Lexer\TokenEmulator;

use _PhpScopere4fa57261c04\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopere4fa57261c04\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopere4fa57261c04\PhpParser\Lexer\Emulative::PHP_7_4;
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
