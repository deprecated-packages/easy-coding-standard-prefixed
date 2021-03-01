<?php

declare (strict_types=1);
namespace _PhpScoperf3dc21757def\PhpParser\Lexer\TokenEmulator;

use _PhpScoperf3dc21757def\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperf3dc21757def\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperf3dc21757def\PhpParser\Lexer\Emulative::PHP_7_4;
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
