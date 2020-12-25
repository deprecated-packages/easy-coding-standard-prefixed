<?php

declare (strict_types=1);
namespace _PhpScoperc8fea59b0cb1\PhpParser\Lexer\TokenEmulator;

use _PhpScoperc8fea59b0cb1\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperc8fea59b0cb1\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperc8fea59b0cb1\PhpParser\Lexer\Emulative::PHP_7_4;
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
