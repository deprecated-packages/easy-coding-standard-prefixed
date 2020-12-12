<?php

declare (strict_types=1);
namespace _PhpScoperbd5c5a045153\PhpParser\Lexer\TokenEmulator;

use _PhpScoperbd5c5a045153\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperbd5c5a045153\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperbd5c5a045153\PhpParser\Lexer\Emulative::PHP_7_4;
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
