<?php

declare (strict_types=1);
namespace _PhpScoper17bb67c99ade\PhpParser\Lexer\TokenEmulator;

use _PhpScoper17bb67c99ade\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper17bb67c99ade\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper17bb67c99ade\PhpParser\Lexer\Emulative::PHP_7_4;
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
