<?php

declare (strict_types=1);
namespace _PhpScoper842c7347e6be\PhpParser\Lexer\TokenEmulator;

use _PhpScoper842c7347e6be\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper842c7347e6be\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper842c7347e6be\PhpParser\Lexer\Emulative::PHP_7_4;
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
