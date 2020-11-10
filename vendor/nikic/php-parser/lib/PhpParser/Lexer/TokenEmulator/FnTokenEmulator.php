<?php

declare (strict_types=1);
namespace _PhpScoper666af036e800\PhpParser\Lexer\TokenEmulator;

use _PhpScoper666af036e800\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper666af036e800\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper666af036e800\PhpParser\Lexer\Emulative::PHP_7_4;
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
