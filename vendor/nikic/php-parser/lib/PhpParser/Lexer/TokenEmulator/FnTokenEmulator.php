<?php

declare (strict_types=1);
namespace _PhpScopera40fc53e636b\PhpParser\Lexer\TokenEmulator;

use _PhpScopera40fc53e636b\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopera40fc53e636b\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera40fc53e636b\PhpParser\Lexer\Emulative::PHP_7_4;
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
