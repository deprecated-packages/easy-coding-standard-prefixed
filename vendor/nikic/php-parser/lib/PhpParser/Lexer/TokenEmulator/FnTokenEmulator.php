<?php

declare (strict_types=1);
namespace _PhpScoper3e8786a75afe\PhpParser\Lexer\TokenEmulator;

use _PhpScoper3e8786a75afe\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper3e8786a75afe\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper3e8786a75afe\PhpParser\Lexer\Emulative::PHP_7_4;
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
