<?php

declare (strict_types=1);
namespace _PhpScopera1a51450b61d\PhpParser\Lexer\TokenEmulator;

use _PhpScopera1a51450b61d\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopera1a51450b61d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera1a51450b61d\PhpParser\Lexer\Emulative::PHP_7_4;
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
