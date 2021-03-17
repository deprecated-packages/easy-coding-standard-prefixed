<?php

declare (strict_types=1);
namespace _PhpScopera3425146d487\PhpParser\Lexer\TokenEmulator;

use _PhpScopera3425146d487\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopera3425146d487\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera3425146d487\PhpParser\Lexer\Emulative::PHP_7_4;
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
