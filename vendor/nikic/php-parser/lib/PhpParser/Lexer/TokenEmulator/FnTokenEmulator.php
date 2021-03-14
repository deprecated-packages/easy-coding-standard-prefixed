<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5\PhpParser\Lexer\TokenEmulator;

use _PhpScoperfb0714773dc5\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperfb0714773dc5\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperfb0714773dc5\PhpParser\Lexer\Emulative::PHP_7_4;
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
