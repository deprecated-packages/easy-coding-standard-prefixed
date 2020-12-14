<?php

declare (strict_types=1);
namespace _PhpScoper6224e3b16fcc\PhpParser\Lexer\TokenEmulator;

use _PhpScoper6224e3b16fcc\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper6224e3b16fcc\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper6224e3b16fcc\PhpParser\Lexer\Emulative::PHP_7_4;
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
