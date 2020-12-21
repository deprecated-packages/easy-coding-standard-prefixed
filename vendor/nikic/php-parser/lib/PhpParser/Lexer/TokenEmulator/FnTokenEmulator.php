<?php

declare (strict_types=1);
namespace _PhpScoperb730595bc9f4\PhpParser\Lexer\TokenEmulator;

use _PhpScoperb730595bc9f4\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperb730595bc9f4\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperb730595bc9f4\PhpParser\Lexer\Emulative::PHP_7_4;
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
