<?php

declare (strict_types=1);
namespace _PhpScoper21c6ce8bfe5d\PhpParser\Lexer\TokenEmulator;

use _PhpScoper21c6ce8bfe5d\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper21c6ce8bfe5d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper21c6ce8bfe5d\PhpParser\Lexer\Emulative::PHP_7_4;
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
