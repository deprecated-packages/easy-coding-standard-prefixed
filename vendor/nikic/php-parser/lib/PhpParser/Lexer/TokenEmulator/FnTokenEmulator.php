<?php

declare (strict_types=1);
namespace _PhpScoper21763e6c7ac4\PhpParser\Lexer\TokenEmulator;

use _PhpScoper21763e6c7ac4\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper21763e6c7ac4\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper21763e6c7ac4\PhpParser\Lexer\Emulative::PHP_7_4;
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
