<?php

declare (strict_types=1);
namespace _PhpScopera51a90153f58\PhpParser\Lexer\TokenEmulator;

use _PhpScopera51a90153f58\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopera51a90153f58\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera51a90153f58\PhpParser\Lexer\Emulative::PHP_7_4;
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
