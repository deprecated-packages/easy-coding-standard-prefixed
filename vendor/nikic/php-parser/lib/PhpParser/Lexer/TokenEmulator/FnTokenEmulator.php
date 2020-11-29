<?php

declare (strict_types=1);
namespace _PhpScoper9d73a84b09ad\PhpParser\Lexer\TokenEmulator;

use _PhpScoper9d73a84b09ad\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper9d73a84b09ad\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper9d73a84b09ad\PhpParser\Lexer\Emulative::PHP_7_4;
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
