<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb\PhpParser\Lexer\TokenEmulator;

use _PhpScoperda2604e33acb\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperda2604e33acb\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperda2604e33acb\PhpParser\Lexer\Emulative::PHP_7_4;
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
