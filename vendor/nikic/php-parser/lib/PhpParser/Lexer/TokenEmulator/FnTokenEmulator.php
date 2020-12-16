<?php

declare (strict_types=1);
namespace _PhpScoperb6a8e65b492c\PhpParser\Lexer\TokenEmulator;

use _PhpScoperb6a8e65b492c\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperb6a8e65b492c\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperb6a8e65b492c\PhpParser\Lexer\Emulative::PHP_7_4;
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
