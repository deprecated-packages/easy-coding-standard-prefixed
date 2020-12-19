<?php

declare (strict_types=1);
namespace _PhpScoper13160cf3462c\PhpParser\Lexer\TokenEmulator;

use _PhpScoper13160cf3462c\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper13160cf3462c\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper13160cf3462c\PhpParser\Lexer\Emulative::PHP_7_4;
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
