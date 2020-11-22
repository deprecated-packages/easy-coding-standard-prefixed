<?php

declare (strict_types=1);
namespace _PhpScoperac4e86be08e5\PhpParser\Lexer\TokenEmulator;

use _PhpScoperac4e86be08e5\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperac4e86be08e5\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperac4e86be08e5\PhpParser\Lexer\Emulative::PHP_7_4;
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
