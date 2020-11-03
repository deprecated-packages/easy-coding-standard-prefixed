<?php

declare (strict_types=1);
namespace _PhpScoperaad82bb90a86\PhpParser\Lexer\TokenEmulator;

use _PhpScoperaad82bb90a86\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperaad82bb90a86\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperaad82bb90a86\PhpParser\Lexer\Emulative::PHP_7_4;
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
