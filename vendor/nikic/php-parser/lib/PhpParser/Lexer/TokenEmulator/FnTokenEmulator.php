<?php

declare (strict_types=1);
namespace _PhpScoperbc5235eb86f3\PhpParser\Lexer\TokenEmulator;

use _PhpScoperbc5235eb86f3\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperbc5235eb86f3\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperbc5235eb86f3\PhpParser\Lexer\Emulative::PHP_7_4;
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
