<?php

declare (strict_types=1);
namespace _PhpScoper065e4ba46e6d\PhpParser\Lexer\TokenEmulator;

use _PhpScoper065e4ba46e6d\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper065e4ba46e6d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper065e4ba46e6d\PhpParser\Lexer\Emulative::PHP_7_4;
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
