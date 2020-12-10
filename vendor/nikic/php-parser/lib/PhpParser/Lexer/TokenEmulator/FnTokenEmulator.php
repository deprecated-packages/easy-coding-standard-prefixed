<?php

declare (strict_types=1);
namespace _PhpScoper6250f8d25076\PhpParser\Lexer\TokenEmulator;

use _PhpScoper6250f8d25076\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper6250f8d25076\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper6250f8d25076\PhpParser\Lexer\Emulative::PHP_7_4;
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
