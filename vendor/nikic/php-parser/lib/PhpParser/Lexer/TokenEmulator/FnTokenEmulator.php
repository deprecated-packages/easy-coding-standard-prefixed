<?php

declare (strict_types=1);
namespace _PhpScoper7c1f54fd2f3a\PhpParser\Lexer\TokenEmulator;

use _PhpScoper7c1f54fd2f3a\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper7c1f54fd2f3a\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper7c1f54fd2f3a\PhpParser\Lexer\Emulative::PHP_7_4;
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
