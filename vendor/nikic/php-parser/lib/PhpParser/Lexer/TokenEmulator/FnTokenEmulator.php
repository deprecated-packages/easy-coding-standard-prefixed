<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PhpParser\Lexer\TokenEmulator;

use _PhpScoperedc2e0c967db\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperedc2e0c967db\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperedc2e0c967db\PhpParser\Lexer\Emulative::PHP_7_4;
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
