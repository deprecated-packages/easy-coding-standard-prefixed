<?php

declare (strict_types=1);
namespace _PhpScoper2731c1906fe4\PhpParser\Lexer\TokenEmulator;

use _PhpScoper2731c1906fe4\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper2731c1906fe4\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper2731c1906fe4\PhpParser\Lexer\Emulative::PHP_7_4;
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
