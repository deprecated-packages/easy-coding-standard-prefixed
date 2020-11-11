<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\PhpParser\Lexer\TokenEmulator;

use _PhpScoper0f5cd390c37a\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper0f5cd390c37a\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper0f5cd390c37a\PhpParser\Lexer\Emulative::PHP_7_4;
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
