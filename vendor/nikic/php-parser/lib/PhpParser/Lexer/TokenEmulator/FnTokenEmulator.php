<?php

declare (strict_types=1);
namespace _PhpScoperb36402634947\PhpParser\Lexer\TokenEmulator;

use _PhpScoperb36402634947\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperb36402634947\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperb36402634947\PhpParser\Lexer\Emulative::PHP_7_4;
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
