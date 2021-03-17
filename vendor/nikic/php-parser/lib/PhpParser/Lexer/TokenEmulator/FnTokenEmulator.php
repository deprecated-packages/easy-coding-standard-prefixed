<?php

declare (strict_types=1);
namespace _PhpScoper0c0702cca4ac\PhpParser\Lexer\TokenEmulator;

use _PhpScoper0c0702cca4ac\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper0c0702cca4ac\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper0c0702cca4ac\PhpParser\Lexer\Emulative::PHP_7_4;
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
