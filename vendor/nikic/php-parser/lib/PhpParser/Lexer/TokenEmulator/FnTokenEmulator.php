<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515\PhpParser\Lexer\TokenEmulator;

use _PhpScoperd4937ee9b515\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperd4937ee9b515\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperd4937ee9b515\PhpParser\Lexer\Emulative::PHP_7_4;
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
