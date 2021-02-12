<?php

declare (strict_types=1);
namespace _PhpScoper4fc0030e9d22\PhpParser\Lexer\TokenEmulator;

use _PhpScoper4fc0030e9d22\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper4fc0030e9d22\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper4fc0030e9d22\PhpParser\Lexer\Emulative::PHP_7_4;
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
