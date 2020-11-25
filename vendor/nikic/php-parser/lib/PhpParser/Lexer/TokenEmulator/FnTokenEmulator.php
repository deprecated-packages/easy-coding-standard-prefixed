<?php

declare (strict_types=1);
namespace _PhpScoperaa402dd1b1f1\PhpParser\Lexer\TokenEmulator;

use _PhpScoperaa402dd1b1f1\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperaa402dd1b1f1\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperaa402dd1b1f1\PhpParser\Lexer\Emulative::PHP_7_4;
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
