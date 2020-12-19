<?php

declare (strict_types=1);
namespace _PhpScoper269dc521b0fa\PhpParser\Lexer\TokenEmulator;

use _PhpScoper269dc521b0fa\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper269dc521b0fa\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper269dc521b0fa\PhpParser\Lexer\Emulative::PHP_7_4;
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
