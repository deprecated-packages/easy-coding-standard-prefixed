<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a\PhpParser\Lexer\TokenEmulator;

use _PhpScoperc95ae4bf942a\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperc95ae4bf942a\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperc95ae4bf942a\PhpParser\Lexer\Emulative::PHP_7_4;
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
