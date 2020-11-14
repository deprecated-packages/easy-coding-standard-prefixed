<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\PhpParser\Lexer\TokenEmulator;

use _PhpScoperb09c3ec8e01a\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperb09c3ec8e01a\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperb09c3ec8e01a\PhpParser\Lexer\Emulative::PHP_7_4;
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
