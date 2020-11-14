<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\PhpParser\Lexer\TokenEmulator;

use _PhpScoperecb978830f1e\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperecb978830f1e\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperecb978830f1e\PhpParser\Lexer\Emulative::PHP_7_4;
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
