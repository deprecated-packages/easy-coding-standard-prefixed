<?php

declare (strict_types=1);
namespace _PhpScoperf7b66f9e3817\PhpParser\Lexer\TokenEmulator;

use _PhpScoperf7b66f9e3817\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperf7b66f9e3817\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperf7b66f9e3817\PhpParser\Lexer\Emulative::PHP_7_4;
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
