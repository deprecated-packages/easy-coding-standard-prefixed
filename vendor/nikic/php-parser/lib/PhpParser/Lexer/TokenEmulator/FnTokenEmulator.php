<?php

declare (strict_types=1);
namespace _PhpScoper11a6395266c4\PhpParser\Lexer\TokenEmulator;

use _PhpScoper11a6395266c4\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper11a6395266c4\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper11a6395266c4\PhpParser\Lexer\Emulative::PHP_7_4;
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
