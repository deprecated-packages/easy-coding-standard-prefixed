<?php

declare (strict_types=1);
namespace _PhpScoper81b3ff5ab9fe\PhpParser\Lexer\TokenEmulator;

use _PhpScoper81b3ff5ab9fe\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper81b3ff5ab9fe\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper81b3ff5ab9fe\PhpParser\Lexer\Emulative::PHP_7_4;
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
