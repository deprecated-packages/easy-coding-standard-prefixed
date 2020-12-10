<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f\PhpParser\Lexer\TokenEmulator;

use _PhpScoperb458b528613f\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperb458b528613f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperb458b528613f\PhpParser\Lexer\Emulative::PHP_7_4;
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
