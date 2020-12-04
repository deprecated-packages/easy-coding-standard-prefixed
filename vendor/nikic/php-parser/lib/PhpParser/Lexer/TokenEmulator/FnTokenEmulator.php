<?php

declare (strict_types=1);
namespace _PhpScopera4fc793dae73\PhpParser\Lexer\TokenEmulator;

use _PhpScopera4fc793dae73\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopera4fc793dae73\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera4fc793dae73\PhpParser\Lexer\Emulative::PHP_7_4;
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
