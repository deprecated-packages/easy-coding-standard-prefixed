<?php

declare (strict_types=1);
namespace _PhpScoper87c77ad5700d\PhpParser\Lexer\TokenEmulator;

use _PhpScoper87c77ad5700d\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper87c77ad5700d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper87c77ad5700d\PhpParser\Lexer\Emulative::PHP_7_4;
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
