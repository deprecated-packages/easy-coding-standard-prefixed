<?php

declare (strict_types=1);
namespace _PhpScoper971ef29294dd\PhpParser\Lexer\TokenEmulator;

use _PhpScoper971ef29294dd\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper971ef29294dd\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper971ef29294dd\PhpParser\Lexer\Emulative::PHP_7_4;
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
