<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\PhpParser\Lexer\TokenEmulator;

use _PhpScoper64a921a5401b\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper64a921a5401b\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper64a921a5401b\PhpParser\Lexer\Emulative::PHP_7_4;
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
