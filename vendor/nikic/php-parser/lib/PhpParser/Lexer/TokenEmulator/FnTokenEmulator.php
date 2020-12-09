<?php

declare (strict_types=1);
namespace _PhpScoperdf15f2b748e9\PhpParser\Lexer\TokenEmulator;

use _PhpScoperdf15f2b748e9\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperdf15f2b748e9\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperdf15f2b748e9\PhpParser\Lexer\Emulative::PHP_7_4;
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
