<?php

declare (strict_types=1);
namespace _PhpScoper83a475a0590e\PhpParser\Lexer\TokenEmulator;

use _PhpScoper83a475a0590e\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper83a475a0590e\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper83a475a0590e\PhpParser\Lexer\Emulative::PHP_7_4;
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
