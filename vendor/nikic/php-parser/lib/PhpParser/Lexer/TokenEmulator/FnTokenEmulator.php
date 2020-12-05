<?php

declare (strict_types=1);
namespace _PhpScoperaba240c3d5f1\PhpParser\Lexer\TokenEmulator;

use _PhpScoperaba240c3d5f1\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperaba240c3d5f1\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperaba240c3d5f1\PhpParser\Lexer\Emulative::PHP_7_4;
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
