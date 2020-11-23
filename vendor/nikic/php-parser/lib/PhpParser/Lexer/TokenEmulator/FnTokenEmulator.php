<?php

declare (strict_types=1);
namespace _PhpScoperd4c5032f0671\PhpParser\Lexer\TokenEmulator;

use _PhpScoperd4c5032f0671\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperd4c5032f0671\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperd4c5032f0671\PhpParser\Lexer\Emulative::PHP_7_4;
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
