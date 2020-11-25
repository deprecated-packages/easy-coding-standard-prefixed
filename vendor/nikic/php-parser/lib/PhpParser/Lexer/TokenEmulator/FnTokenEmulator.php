<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PhpParser\Lexer\TokenEmulator;

use _PhpScoperdc8fbcd7c69d\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperdc8fbcd7c69d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperdc8fbcd7c69d\PhpParser\Lexer\Emulative::PHP_7_4;
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
