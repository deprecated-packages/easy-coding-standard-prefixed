<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\PhpParser\Lexer\TokenEmulator;

use _PhpScoperad4605bb9267\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperad4605bb9267\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperad4605bb9267\PhpParser\Lexer\Emulative::PHP_7_4;
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
