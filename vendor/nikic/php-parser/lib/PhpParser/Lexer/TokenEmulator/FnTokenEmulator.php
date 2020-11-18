<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\PhpParser\Lexer\TokenEmulator;

use _PhpScoperf77bffce0320\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperf77bffce0320\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperf77bffce0320\PhpParser\Lexer\Emulative::PHP_7_4;
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
