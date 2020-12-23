<?php

declare (strict_types=1);
namespace _PhpScoper14cb6de5473d\PhpParser\Lexer\TokenEmulator;

use _PhpScoper14cb6de5473d\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper14cb6de5473d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper14cb6de5473d\PhpParser\Lexer\Emulative::PHP_7_4;
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
