<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4\PhpParser\Lexer\TokenEmulator;

use _PhpScoperaac5f7c652e4\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperaac5f7c652e4\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperaac5f7c652e4\PhpParser\Lexer\Emulative::PHP_7_4;
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
