<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\PhpParser\Lexer\TokenEmulator;

use _PhpScoper49c742f5a4ee\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper49c742f5a4ee\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper49c742f5a4ee\PhpParser\Lexer\Emulative::PHP_7_4;
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
