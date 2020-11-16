<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\PhpParser\Lexer\TokenEmulator;

use _PhpScoperdf6a0b341030\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperdf6a0b341030\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperdf6a0b341030\PhpParser\Lexer\Emulative::PHP_7_4;
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
