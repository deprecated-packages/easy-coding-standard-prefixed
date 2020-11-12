<?php

declare (strict_types=1);
namespace _PhpScoper3d6b50c3ca2f\PhpParser\Lexer\TokenEmulator;

use _PhpScoper3d6b50c3ca2f\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper3d6b50c3ca2f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper3d6b50c3ca2f\PhpParser\Lexer\Emulative::PHP_7_4;
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
