<?php

declare (strict_types=1);
namespace _PhpScoper4298f97f3cb3\PhpParser\Lexer\TokenEmulator;

use _PhpScoper4298f97f3cb3\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper4298f97f3cb3\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper4298f97f3cb3\PhpParser\Lexer\Emulative::PHP_7_4;
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
