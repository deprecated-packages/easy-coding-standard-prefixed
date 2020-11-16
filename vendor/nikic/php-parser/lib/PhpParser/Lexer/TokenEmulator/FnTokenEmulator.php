<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\PhpParser\Lexer\TokenEmulator;

use _PhpScoper3e1e0e5bb8ef\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper3e1e0e5bb8ef\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper3e1e0e5bb8ef\PhpParser\Lexer\Emulative::PHP_7_4;
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
