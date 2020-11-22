<?php

declare (strict_types=1);
namespace _PhpScoperc5bee3a837bb\PhpParser\Lexer\TokenEmulator;

use _PhpScoperc5bee3a837bb\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperc5bee3a837bb\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperc5bee3a837bb\PhpParser\Lexer\Emulative::PHP_7_4;
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
