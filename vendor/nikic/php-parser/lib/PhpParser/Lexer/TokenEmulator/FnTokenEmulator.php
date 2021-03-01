<?php

declare (strict_types=1);
namespace _PhpScoper06c5fb6c14ed\PhpParser\Lexer\TokenEmulator;

use _PhpScoper06c5fb6c14ed\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper06c5fb6c14ed\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper06c5fb6c14ed\PhpParser\Lexer\Emulative::PHP_7_4;
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
