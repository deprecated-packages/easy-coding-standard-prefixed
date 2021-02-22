<?php

declare (strict_types=1);
namespace _PhpScoperfcee700af3df\PhpParser\Lexer\TokenEmulator;

use _PhpScoperfcee700af3df\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperfcee700af3df\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperfcee700af3df\PhpParser\Lexer\Emulative::PHP_7_4;
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
