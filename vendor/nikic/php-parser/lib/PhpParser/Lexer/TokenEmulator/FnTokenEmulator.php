<?php

declare (strict_types=1);
namespace _PhpScoper5f6e904600e7\PhpParser\Lexer\TokenEmulator;

use _PhpScoper5f6e904600e7\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper5f6e904600e7\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper5f6e904600e7\PhpParser\Lexer\Emulative::PHP_7_4;
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
