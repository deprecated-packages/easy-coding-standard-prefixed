<?php

declare (strict_types=1);
namespace _PhpScoperfb2c402b972b\PhpParser\Lexer\TokenEmulator;

use _PhpScoperfb2c402b972b\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperfb2c402b972b\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperfb2c402b972b\PhpParser\Lexer\Emulative::PHP_7_4;
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
