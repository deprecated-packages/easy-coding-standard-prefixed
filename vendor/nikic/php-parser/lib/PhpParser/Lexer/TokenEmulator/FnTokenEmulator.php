<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d\PhpParser\Lexer\TokenEmulator;

use _PhpScoperb26833cc184d\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperb26833cc184d\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperb26833cc184d\PhpParser\Lexer\Emulative::PHP_7_4;
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
