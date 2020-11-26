<?php

declare (strict_types=1);
namespace _PhpScopercb217fd4e736\PhpParser\Lexer\TokenEmulator;

use _PhpScopercb217fd4e736\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopercb217fd4e736\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopercb217fd4e736\PhpParser\Lexer\Emulative::PHP_7_4;
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
