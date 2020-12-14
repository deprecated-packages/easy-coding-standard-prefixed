<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PhpParser\Lexer\TokenEmulator;

use _PhpScoperc64a4ac1af35\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperc64a4ac1af35\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperc64a4ac1af35\PhpParser\Lexer\Emulative::PHP_7_4;
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
