<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670\PhpParser\Lexer\TokenEmulator;

use _PhpScoper224ae0b86670\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper224ae0b86670\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper224ae0b86670\PhpParser\Lexer\Emulative::PHP_7_4;
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
