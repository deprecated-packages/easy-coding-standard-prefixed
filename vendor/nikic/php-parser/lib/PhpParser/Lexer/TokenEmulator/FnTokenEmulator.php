<?php

declare (strict_types=1);
namespace _PhpScoper79449c4e744b\PhpParser\Lexer\TokenEmulator;

use _PhpScoper79449c4e744b\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper79449c4e744b\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper79449c4e744b\PhpParser\Lexer\Emulative::PHP_7_4;
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
