<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\PhpParser\Lexer\TokenEmulator;

use _PhpScoper229e8121cf9f\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper229e8121cf9f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper229e8121cf9f\PhpParser\Lexer\Emulative::PHP_7_4;
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
