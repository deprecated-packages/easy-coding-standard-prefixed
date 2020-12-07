<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb\PhpParser\Lexer\TokenEmulator;

use _PhpScoperb73f9e44f4eb\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperb73f9e44f4eb\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperb73f9e44f4eb\PhpParser\Lexer\Emulative::PHP_7_4;
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
