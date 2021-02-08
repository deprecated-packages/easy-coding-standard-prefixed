<?php

declare (strict_types=1);
namespace _PhpScoper7faa8deb0d3c\PhpParser\Lexer\TokenEmulator;

use _PhpScoper7faa8deb0d3c\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper7faa8deb0d3c\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper7faa8deb0d3c\PhpParser\Lexer\Emulative::PHP_7_4;
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
