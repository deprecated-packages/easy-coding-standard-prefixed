<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\PhpParser\Lexer\TokenEmulator;

use _PhpScoperddde3ba4aebc\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperddde3ba4aebc\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperddde3ba4aebc\PhpParser\Lexer\Emulative::PHP_7_4;
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
